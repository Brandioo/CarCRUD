<?php
include "header.php";
include "footer.php";
?>
<a class="logo" href="https://www.gonlinepro.com/">
    <embed src="/img/white_logo_transparent_background.png" width="150" height="170">
</a>
<style>
    /* Style the header */
    .header {
        background-image: url(https://i.pinimg.com/originals/ff/46/3f/ff463f7a1f926bbde7d50f05b546a0ef.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        padding: 20px;
        align: center;
        color: #0aa9e7;
    }

    @-webkit-keyframes glowing {
        0% {
            background-color: #0091b2;
            -webkit-box-shadow: 0 0 3px #0091b2;
        }
        50% {
            background-color: #21c7ed;
            -webkit-box-shadow: 0 0 15px #21c7ed;
        }
        100% {
            background-color: #0091b2;
            -webkit-box-shadow: 0 0 3px #0091b2;
        }
    }

    @keyframes glowing {
        0% {
            background-color: #0091b2;
            box-shadow: 0 0 3px #0091b2;
        }
        50% {
            background-color: #21c7ed;
            box-shadow: 0 0 15px #21c7ed;
        }
        100% {
            background-color: #0091b2;
            box-shadow: 0 0 3px #0091b2;
        }
    }

    .embed-btn {
        display: block;
        width: 230px;
        height: 230px;
        margin-left: 10px;
    }

    embed {
        fill: blue;
        -webkit-animation: glowing-embed 1300ms infinite;
        -moz-animation: glowing-embed 1300ms infinite;
        -o-animation: glowing-embed 1300ms infinite;
        animation: glowing-embed 1300ms infinite;
    }

    @-webkit-keyframes glowing-embed {
        0% {
            fill: #0091b2;
            -webkit-filter: drop-shadow(0 0 3px #0091b2);
        }
        50% {
            fill: #21c7ed;
            -webkit-filter: drop-shadow(0 0 15px #21c7ed);
        }
        100% {
            fill: #0091b2;
            -webkit-filter: drop-shadow(0 0 3px #0091b2);
        }
    }

    @keyframes glowingEmbed {
        0% {
            fill: #0091b2;
            filter: drop-shadow(0 0 3px #0091b2);
        }
        50% {
            fill: #21c7ed;
            filter: drop-shadow(0 0 15px #21c7ed);
        }
        100% {
            fill: #0091b2;
            filter: drop-shadow(0 0 3px #0091b2);
        }
    }

    body {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .btn {
        width: 90px;
        height: 40px;
        font-size: 1.1em;
        cursor: pointer;
        background: #171717;
        color: white;
        border: none;
        transition: all .4s;
    }

    .btn:hover {
        border-radius: 5px;
        transform: translateY(-10px);
        box-shadow: 0 7px 0 -2px #f85959,
        0 15px 0 -4px #39a2db,
        0 16px 10px -3px #39a2db
    }

    .btn-hover1 {
        box-shadow: 0px 0px 10px 0px #b5b5b5;
        text-align: center;
        width: 100%;
        margin: 50px auto 0px;
        padding: 50px 0px;
        border-radius: 10px;
    }

    .btn-hover1 . {
        background: none;
        color: #333333;
        min-width: 30%;
        border-radius: 25px;
        border: 1px solid #e6e6e6;
        padding: 10px 20px;
        margin: 10px;
        position: relative;
        z-index: 1;
        box-shadow: 0px 1px 10px 0px rgb(206, 205, 201);
        font-size: 19px;
        overflow: hidden;
        outline: none;
        transition: 0.5s;
        cursor: pointer;
    }

    .btn-hover1 .button1:hover {
        color: #d60303;
    }

    .left-right::before {
        content: "";
        position: absolute;
        width: 15px;
        height: 100%;
        top: 0px;
        left: 0px;
        background: #9C2780;
        z-index: -1;
        transition: 0.5s;
    }

    .left-right:hover::before {
        width: 100%;
    }

    .right-left::before {
        content: "";
        position: absolute;
        width: 15px;
        height: 100%;
        top: 0px;
        right: 0px;
        background: #F44336;
        z-index: -1;
        transition: 0.5s;
    }

    .right-left:hover::before {
        width: 100%;
    }
</style>
<div class="container">
    <div class="row">
        <div style="text-align: right; margin: 10px;">
            <button type="button" class="btn btn-primary text-left" data-toggle="modal" data-target="#addModal">
                Add Car
            </button>
        </div>
        <table class="table table-responsive">
            <thead>
            <tr>
                <th class="table-header">CAR ID</th>
                <th class="table-header">Firm</th>
                <th class="table-header">Type</th>
                <th class="table-header">Year Of Production</th>
                <th class="table-header">KM Done</th>
                <th class="table-header">Transmission</th>
                <th class="table-header">Price</th>
                <th class="table-header">State</th>
                <th class="table-header">Actions</th>
            </tr>
            </thead>
            <tbody id="table-body">
            <?php
            foreach ($cars as $row) {
                ?>
                <tr class="table-row">
                    <td><?php echo $row['carID'] ?></td>
                    <td><?php echo $row['firm'] ?></td>
                    <td><?php echo $row['type'] ?></td>
                    <td><?php echo $row['yearOfProduction'] ?></td>
                    <td><?php echo $row['KMDone'] ?></td>
                    <td><?php echo $row['transmission'] ?></td>
                    <td><?php echo $row['price'] ?></td>
                    <td><?php echo $row['state'] ?></td>
                    <td>
                        <div class="btnhover1">
                            <form method="POST" action="/delete/<?= $row['carID'] ?>">
                                <button type="submit" class="button1 right-left"> Delete</button>
                            </form>
                        </div>
                    </td>
                    <td>
                        <form method="get" action="http://www.google.com/search" align="center">
                            <input type="text" name="search" size="31" maxlength="255" placeholder="Search.."/>
                            <a href="http://www.google.com/search">
                                <embed
                                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/2048px-Google_%22G%22_Logo.svg.png"
                                        width="60" height="60">
                            </a>
                        </form>
                    </td>
                    <td><?php echo '<a class="button left-right" href="/update/' . $row['carID'] . '" >Update</a>' ?></td>

                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <!--    Modali i insertit-->

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="/">
                        Firm: <input class="form-control" type="text" name="firm"/>
                        Type: <input class="form-control" type="text" name="type"/>
                        Year of Production: <input class="form-control" type="number" name="number"/>
                        KM-Done: <input class="form-control" type="number" name="kmdone"/>
                        Transmission: <input class="form-control" type="text" name="transmission"/>
                        Price: <input class="form-control" type="number" name="price"/>
                        State: <input class="form-control" type="text" name="state"/>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="add_record" class="btn btn-primary">Add Cars</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>