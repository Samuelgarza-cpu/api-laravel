<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Oficio</title>
</head>

<body style=" font-family: Arial, Helvetica, sans-serif; background: url({{ public_path('storage/Oficio.jpg') }}); background-position: center; background-size: cover;  margin: 0; padding: 0;">
    <div style="display: flex; flex-direction: column; margin-top: 130px; align-items: stretch; justify-content: space-evenly; align-content: center; flex-wrap: nowrap; padding: 10px;">
        <div style=" width: 25%; align-self: end; text-align: right; float:right; overflow-wrap: break-word;">
            <h5>
                <b>{{'PMGP-DJ 2022'}}<br>
                    {{'DIRECCION JURIDICA'}} <br>
                    Asunto: El que se indica</b>
            </h5>
        </div>
    {{-- </div>
    <div style="display: flex; flex-direction: column; align-items: stretch; justify-content: space-evenly; align-content: center; flex-wrap: nowrap; padding: 10px;"> --}}
        <div style="text-align: left; width:60%; display: block; letter-spacing: 1px; overflow-wrap: break-word; margin-top:95px">
            <h4><b>{{'ING. ROCIO GUADALUPE RAMIREZ PACEHCO'}} <br> 
                {{'DEL ÁREA DE INFORMATICA'}} <br>
                PRESENTE.-</b></h4>
        </div>
        <div style="text-align: center; margin-top: 15px; text-align: justify; ">
            <div id="contenido">
                <p>Tienes hasta 1,000 letras... <br>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum magnam distinctio error esse dolorem
                    sapiente. Fuga sed dolore laborum consequuntur voluptatum eius, doloribus ipsum architecto, corporis,
                    inventore fugiat numquam quibusdam? Lorem ipsum dolor <br>sit amet consectetur adipisicing elit. Distinctio,
                    autem dolorem omnis impedit veniam, quos incidunt voluptatum asperiores magni soluta exercitationem qui
                    est rem eaque aspernatur voluptatem ea tempora doloremque.
                    <br>sit amet consectetur adipisicing elit. Distinctio,
                    autem dolorem omnis impedit veniam, quos incidunt voluptatum asperiores magni soluta exercitationem qui
                    est rem eaque aspernatur voluptatem ea tempora doloremque.
                </p>
            </div> 
        </div>

        <div
            style="text-align: center; margin-top: 100px; position: absolute; bottom: 200px; width: 100%; ">
            <h4><b>ATENTAMENTE <br>
                    GÓMEZ PALACIO, DGO., 29 DE MAYO DE 2023</b></h4>

            <img src="{{ public_path('storage/Catastro.png') }}" alt="" width="100" height="100">
            <h4><b>ING. SAMUEL GARZA <br>
                    EL MERO MERO</b></h4>
        </div>
    </div>
</body>

</html>
