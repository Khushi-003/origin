<?php

function hitRecipieAPI($recipieName)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.edamam.com/search?q=' . urlencode($recipieName) . '&app_id=d40c2f29&app_key=4330d7b01907e83778c80814e2bd894c',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
    ));

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API SEARCH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background-image: url(https://wallpaperaccess.com/full/187161.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }

        .button {
            float: right;
            background-color: white;
            border: 3px solid black;
            color: black;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            /* display: inline-block; */
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button:hover {
            background-color: grey;
        }

        button {
            font-size: 2rem;
            border-radius: 5px;
            border: 3px solid green;
        }

        button:hover {
            background-color: greenyellow;
        }

        #dish {
            font-size: 3rem;
            font-weight: bold;
        }
    </style>
</head>

<body class="container pt-4">
    <?php
    if (isset($_POST['dataview']) && $_POST['dataview'] == 'true') {
        $apiData = json_decode(hitRecipieAPI($_POST['recipieName']));
        if ($apiData->count <= 0) { ?>
            <div class="alert alert-danger" role="alert">
                No Data Found. Please Refresh page to search again.
            </div>
        <?php } else { ?>
            <div class="btn">
                <a href="../Main/index.php" class="button">Back</a>
            </div>
            <div class="row">
                <?php foreach ($apiData->hits as $dataCount) { ?>
                    <div class="col-sm-3 mb-3">
                        <div class="card">
                            <img src="<?= $dataCount->recipe->image ?>" class="card-img-top" alt="<?= $dataCount->recipe->label ?>">
                            <div class="card-body">
                                <h6 class="card-title"><?= $dataCount->recipe->label ?></h6>
                                <div class="text-center">
                                    <a href="<?= $dataCount->recipe->url ?>" class="btn btn-primary">Read About Recipe</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        <?php }
    } else { ?>
        <div class="btn">
            <a href="../Main/index.php" class="button">Back</a>
        </div>
        <form method="POST" action="">
            <div class="row justify-content-center">
                <div class="col-sm-4">
                    <input type="hidden" name="dataview" class="form-control" value='true' required>
                    <div class="mb-3">
                        <label for="" id="dish" class="form-label">Dish Name</label>
                        <input type="text" name="recipieName" class="form-control" required>
                    </div>
                    <div class="text-center">
                        <button type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
    <?php } ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>

</html>