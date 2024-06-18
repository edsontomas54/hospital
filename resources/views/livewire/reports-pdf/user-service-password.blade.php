<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .context {
            text-align: center;
            margin-bottom: 10px;
            color: black;
            font-weight: 600;
        }
        .box-context {
            margin-top: 10px;
            padding: 10px;
            border: 1px solid black;
            border-radius: 10px;
            margin-bottom: 10px;
        }
        .container {
            margin: 20px;
        }
        .first-item {
            font-weight: bold;
        }
        .last-item {
            font-weight: normal;
        }
    </style>
</head>
<body>
    <div class="context">
        <img src="{{$image}}" class="header-brand-img" alt="Balcão Virtual" width="100px">
        <p>Republica de Mocambique</p>
        <p>Ministerio de Saúde</p>
        <p>Centro de Saúde São Dâmaso
        </p>

    </div>

    <div class="table">
        <div class="container">
            <p style="margin-top: 5px first-item">Senha de atendimento- PDF</p>
            <div class="box-context">
                <p class="first-item">Estado: <span>{{$status}}</span></p>
                <p class="first-item">Nome do paciente: <span>{{$appointment->user->name}}</span></p>
                <p>Número de BI: <span>{{$appointment->user->bI}}</span></p>
                <p>Senha de atendimento- PDF: <span>{{$key}}</span></p>
                <p>Nome do Médico: <span>{{$appointment->doctor->name}}</span></p>
                <p>Data da Consulta: <span>{{$appointment->appointment_date}}</span></p>
                <p>Horário: <span>{{$time}}</span></p>
                <p>Tipo de Consulta: <span>{{$statusAppointment}}</span></p>
                <p class="last-item">Especialidade: <span>{{$specialty}}</span></p>
            </div>
        </div>
    </div>

    <div class="context">
        <img src="{{$qrCodeImage}}" class="header-brand-img" alt="Balcão Virtual" width="100px">
        <p>Validar com o QR code</p>
        {{-- <p>Ministerio de Saúde</p>
        <p>Centro de Saúde São Dâmaso
        </p> --}}

    </div>
</body>
</html>
