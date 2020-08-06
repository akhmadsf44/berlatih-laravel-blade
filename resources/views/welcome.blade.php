<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <table class="table table-bordered">
    <thead>                  
        <tr>
        <th style="width: 10px">#</th>
        <th>Task</th>
        <th>Progress</th>
        <th style="width: 40px">Label</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>1.</td>
        <td>Update software</td>
        <td>
            <div class="progress progress-xs">
            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
            </div>
        </td>
        <td><span class="badge bg-danger">55%</span></td>
        </tr>
        <tr>
        <td>2.</td>
        <td>Clean database</td>
        <td>
            <div class="progress progress-xs">
            <div class="progress-bar bg-warning" style="width: 70%"></div>
            </div>
        </td>
        <td><span class="badge bg-warning">70%</span></td>
        </tr>
        <tr>
        <td>3.</td>
        <td>Cron job running</td>
        <td>
            <div class="progress progress-xs progress-striped active">
            <div class="progress-bar bg-primary" style="width: 30%"></div>
            </div>
        </td>
        <td><span class="badge bg-primary">30%</span></td>
        </tr>
        <tr>
        <td>4.</td>
        <td>Fix and squish bugs</td>
        <td>
            <div class="progress progress-xs progress-striped active">
            <div class="progress-bar bg-success" style="width: 90%"></div>
            </div>
        </td>
        <td><span class="badge bg-success">90%</span></td>
        </tr>
    </tbody>
    </table>
    </body>
</html>
