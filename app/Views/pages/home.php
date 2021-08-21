<?php echo view('templates/header') ?>
<div class="container mt-5">
    <div class="card">
        <h5 class="card-header">TOTAL AMOUNT : <b>5,00,000</b></h5>
    </div>
    <div class="mt-2 ">
        <form action="/action_page.php">
            <div class="form-group d-inline">
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                <button type="submit" class="btn btn-primary float-right" id="btn"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <table class="table table-hover mt-1">
        <thead>
            <tr>
                <th scope="col">S.NO</th>
                <th scope="col">Full Name</th>
                <th scope="col">Mobile Number</th>
                <th scope="col">Taken Money</th>
                <th scope="col">Interest %</th>
                <th scope="col">Days</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $item) : ?>

                <tr>
                    <th scope="row"><?php echo $item['id']; ?></th>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $item['mobile_no']; ?></td>
                    <td><?php echo $item['taken_amount']; ?></td>
                    <td><?php echo $item['interest']; ?></td>
                    <td><?php echo $item['days']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="card mt-3">
        <h5 class="card-header">TOTAL INTEREST : <b>20,000</b> <span class="float-right">TOTAL AMOUNT : <b>5,20,000</b></span></h5>
    </div>
</div>
<?php echo view('templates/footer') ?>