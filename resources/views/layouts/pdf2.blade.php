<!DOCTYPE>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Biblioteca Popular de Azara</title>
<style>
    body {
        /*position: relative;*/
        /*width: 16cm;  */
        /*height: 29.7cm; */
        /*margin: 0 auto; */
        /*color: #555555;*/
        /*background: #FFFFFF; */
        font-family: Arial, sans-serif;
        font-size: 14px;
        /*font-family: SourceSansPro;*/
    }

    #logo {
        float: left;
        margin-top: 1%;
        margin-left: 2%;
        margin-right: 2%;
    }

    #imagen {
        width: 100px;
    }

    #datos {
        float: left;
        margin-top: 0%;
        margin-left: 2%;
        margin-right: 2%;
        /*text-align: justify;*/
    }

    #encabezado {
        text-align: center;
        margin-left: 5%;
        margin-right: 44%;
        font-size: 15px;
    }

    #fecha {
        /*position: relative;*/
        float: right;
        margin-top: -3%;
        margin-left: 2%;
        margin-right: 2%;
        font-size: 14px;
    }

    #user {
        /*position: relative;*/
        float: right;
        margin-top: 1%;
        margin-left: 2%;
        margin-right: -19%;
        font-size: 10px;
    }

    section {
        clear: left;
    }

    #cliente {
        text-align: left;
    }

    #titulo {
        width: 80%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #fv,
    #fac {
        color: #000000;
        font-size: 15px;
    }

    #fa {
        color: #FFFFFF;
        font-size: 15px;
    }

    #filtros {
        color: #000000;
        font-size: 13px;
        font-weight: lighter;
    }

    #facliente thead {
        padding: 20px;
        background: #FFFFFF;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #facvendedor {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #facvendedor thead {
        padding: 20px;
        background: #2183E3;
        text-align: center;
        border-bottom: 1px solid #FFFFFF;
    }

    #lista {
        width: 100%;
        border-collapse: collapse;
        border-spacing: 0;
        margin-bottom: 15px;
    }

    #lista thead {
        padding: 20px;
        background: #000000;
        text-align: left;
        border-bottom: 1px solid #FFFFFF;
    }

    #footer {
        bottom: 0;
        margin: 0 -2cm;
        border-top: 0pt solid #1BE359FF;
    }

    footer {
        position: fixed;
        bottom: -50px;
        left: -5px;
        right: -5px;
        height: 50px;

        /** Extra personal styles **/
        background-color: #FFFFFF;
        color: black;
        text-align: right;
        line-height: 35px;
    }

    /* .page-number {
	        text-align: right;
	        color: #fff;
	        margin: -1.4cm 1.5cm;
	    }

	    .infor {
	        text-align: center;
	        color: #fff;
	    }
	    .infor p{
		margin-top: -1.4cm;
	    } */

    /* body.header{
            position: fixed;
        } */

    .page-number:before {
        content: "Pag. "counter(page);
    }
</style>

<body>
    <header style="position:fixed;">

        <div id="logo">
            @yield('logo')
        </div>


        <div id="datos">
            @yield('datos')
        </div>

        <div id="fecha">
            <p>Fecha: {{ \Carbon\Carbon::now()->format('d/m/Y')}}</p>
        </div>

        <div id="user">
            Generado por: {{ "Joaquin" . ' ' . "Potocki" }}
        </div>

    </header>
    <br>
    <section>
        @yield('content')
    </section>
    <br>
    <br>
    <div class="izquierda">
        <p><strong>Total de registros: </strong> @yield('cantidad')</p>
    </div>

    {{-- <footer>
            <div class="page-number"></div>
        </footer> --}}

</body>

</html>
