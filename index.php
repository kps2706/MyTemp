<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap//dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Template for eLearning</title>
</head>

<body>

    <div class="container">

        <section class="header">
            <div class="row header_row d-flex align-items-center">
                <div class="col-md-8">
                    <h1 class="pt-2">PHP REST API CRUD</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="col-md-4">
                    <p class="mb-0">Search</p>
                    <input type="text" class="form-control mb-3 mb-md-0" id="searchBox">
                </div>
            </div>

            <div class="row align-content-center">

                <div class="col-12 input_form fw-bold">

                    <label for="txtName">Name :</label>
                    <input type="text" id="txtName" class="ms-2 ">
                    <label for="txtAge">Age :</label>
                    <input type="text" id="txtAge" class="ms-2">
                    <label for="txtAge">City :</label>
                    <input type="text" id="txtCity" class="ms-2">

                    <button type="submit" class="btn">Save</button>
                </div>

            </div>

        </section>

        <section class="body">

            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>City</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Prabhakar</td>
                        <td>Gurugram</td>
                    </tr>
                </tbody>
            </table>

        </section>

    </div>
</body>

</html>