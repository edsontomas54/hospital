<?php

namespace App\Livewire\ReportsPdf;

use App\Enums\AppointmentType;
use App\Enums\Specialty;
use App\Enums\Status;
use App\Models\MakeAppointment;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserServicePassword extends Component
{
    public $path ="";
    public $image="";
    public $qrCodeImage="";
    public $qrPath="";

    public function __construct(Request $request){

        $this->path =  public_path(). '/assets/img/emblema.png';
        $this->qrPath =  public_path(). '/assets/img/hospitalQrcode.png';
        $this->image = $this->convertImageToBase64( $this->path);
        $this->qrCodeImage = $this->convertImageToBase64( $this->qrPath);

    }

    public function render()
    {
        return view('livewire.reports-pdf.user-service-password');
    }

    public function downloadPDF(Request $request){


        $user= Auth::user();

        $image =$this->image;
        $qrCodeImage =$this->qrCodeImage;

        $appointment= MakeAppointment::with('user')
        ->where('id',$request->Oid)
        ->where("user_id", $user->id)->first();


        // $key = date("ymd").$appointment->preferred_time . $appointment->id;
        $key = $this->generateKey($appointment->preferred_time,
         $appointment->id,$appointment->appointment_date);


        $hour = Carbon::createFromFormat('H:i:s',$appointment->preferred_time)->format('H');
        $minute = Carbon::createFromFormat('H:i:s',$appointment->preferred_time)->format('H');

        $time = $hour . "h:" .$minute;

        $specialty = Specialty::getPortugueseLabel($appointment->doctor->specialty);
        $statusAppointment = AppointmentType::getPortugueseLabel($appointment->appointment_type);
        $status = Status::getPortugueseLabel($appointment->status);

        $html = view('livewire.reports-pdf.user-service-password',
        compact('image','appointment','time'
        ,'specialty','specialty','statusAppointment','status','key','qrCodeImage'));

        $this->generatPdf($html , "report" . time() . '.pdf');
    }

    public function generatPdf($html,$fileName){
        $pdf = new Dompdf();

        $pdf->loadHtml($html);
        $pdf->setPaper('A4', 'portrait');
        $pdf->render();

        return $pdf->stream($fileName);
    }

    public function convertImageToBase64($path){
        $type= pathinfo($path,PATHINFO_EXTENSION);

        $data = file_get_contents($path);

        $image = 'data:image'.$type .';base64,'.base64_encode($data);

        return $image;
    }

    public function generateKey($time,$id,$date){

        // Get the current date in the format YYYYMMDD
        $current_date = date("Ymd");

        $date_parts = explode('-' , $date);

        $formatted_date = $date_parts[0] . $date_parts[1] .$date_parts[2];

        // Extract and format the time in HHMM format
        $time_parts = explode(':', $time);
        $formatted_time = str_pad($time_parts[0], 2, '0', STR_PAD_LEFT) . str_pad($time_parts[1], 2, '0', STR_PAD_LEFT);

        // Concatenate the date, formatted time, and appointment ID to form the key
        $key =  $formatted_date  . $formatted_time . $id;

        return $key;
    }
}
