<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
 
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    </head>
    <body >
        <div class="container  mx-auto flex-row  justify-center m-6">
            <div class="circleBg">COLORWHEEL</div>
            <form action=""  >
                <div class="flex flex-row space-x-6">
                    <div>
                        <label for="red">R:</label>
                        <input  type="text" maxlength="3" name="red"/>
                    </div>
                    <div>
                        <label for="green" >G:</label>
                        <input type="text"maxlength="3" class="p-2"name="green"/>
                    </div>
                    <div>
                        <label for="blue" >B:</label>
                        <input type="text"maxlength="3" class="p-2"name="blue"/>
                    </div>
                </div>
                <input type="submit" value="Submit"/>
            </form>
        </div>
    </body>
</html>
