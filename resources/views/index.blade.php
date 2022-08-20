<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Enter Your Information & Verify The Application</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/7.css">
  </head>

    <style>
        .violet::before,
        .violet > .title-bar {
            background-color: #805ba5;
        }

        .invalid{
            color: red; 
            font-size: 12px;
        }

        .h-100vh{
            height: 100vh;
        }

        .main-bg{
            background-color: #f1f2f6;
        }

        .flex-end{
            justify-content: flex-end
        }
    </style>

  <body>

    <!-- center div -->
    <div class="container-fluid main-bg">
      <div class="row justify-content-center align-items-center h-100vh">
        <div class="col-md-4">
            <div class="window glass violet">
                <div class="title-bar">
                    <div class="title-bar-text">Enter Purchase Code Given By SoftTech-IT</div>
                    <div class="title-bar-controls">
                        <button aria-label="Close"></button>
                    </div>
                </div>
                <div class="window-body">

                    <div class="field-row-stacked">
                        <label for="text23">Enter Purchase Code Given By SoftTech-IT</label>
                        <input id="text23" type="text">
                        <div class="title-bar-text invalid">Please enter application purchase code</div>
                    </div>

                    <section class="field-row flex-end">
                        <button>Submit</button>
                        <button>Reset</button>
                    </section>

                </div>
            </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>