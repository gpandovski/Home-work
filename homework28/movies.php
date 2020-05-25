<?php 
$filename="movies/movies.csv";

$handle = fopen($filename, 'r');
while(!feof($handle)) {
    $data[] = fgetcsv($handle);
}
fclose($handle);

array_shift($data);

if(!empty($_POST['genre'])) {
    $selectedGenre = $_POST['genre'];
}
if(!empty($_POST['studio'])) {
    $selectedStudio = $_POST['studio'];
}
if(!empty($_POST['year'])) {
    $selectedYear = $_POST['year'];
}

$result = [];

$studios = [];
$genres = [];
$years = [];
foreach($data as $key => $value) {
    array_push($studios, $value[2]);
    array_push($genres, $value[1]);
    array_push($years, $value[7]);
}
$studios = array_unique($studios);
$genres = array_unique($genres);
$years = array_unique($years);
if(!empty($selectedGenre)) {
    $result = [];
    foreach($data as $genre) {
        $dataGenre = $genre[1];
        if($selectedGenre == $dataGenre) {
            $result[] = $genre;
        }
    }
}
if(!empty($selectedStudio)) {
    $result = [];
    foreach($data as $studio) {
        $dataStudio = $studio[2];
        if($selectedStudio == $dataStudio) {
            $result[] = $studio;
        }
    }
}
if(!empty($selectedYear)) {
    $result = [];
    foreach($data as $year) {
        $dataYear = $year[7];
        if($selectedYear == $dataYear) {
            $result[] = $year;
        }
    }
}
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Movie FIlter</h1>
        <form class="form-inline" method="POST">
            <label class="my-1 mr-2" >Genre: </label>
            <select class="custom-select my-1 mr-sm-2" name="genre">
                <option selected value="">Choose...</option>
                <?php if(isset($genres)):?>
                    <?php foreach($genres as $genre):?>
                        <option value=<?= $genre;?> > <?= $genre;?> </option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <label class="my-1 mr-2" >Company Production: </label>
            <select class="custom-select my-1 mr-sm-2" name="studio">
                <option selected value="">Choose...</option>
                <?php if(isset($studios)):?>
                    <?php foreach($studios as $studio):?>
                        <option value=<?= $studio;?> > <?= $studio;?> </option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <label class="my-1 mr-2" >Years: </label>
            <select class="custom-select my-1 mr-sm-2" name="year">
                <option selected value="">Choose...</option>
                <?php if(isset($years)):?>
                    <?php foreach($years as $year):?>
                        <option value=<?= $year;?> > <?= $year;?> </option>
                    <?php endforeach;?>
                <?php endif;?>
            </select>
            <button type="submit" class="btn btn-primary my-1">Submit</button>
        </form>
 
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Film</th>
                    <th scope="col">Genre</th>
                    <th scope="col">Lead Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($result)) : ?>
                    <?php foreach($result as $key => $value) : ?>
                    <tr>
                        <td><?= $value[0]; ?></td>
                        <td><?= $value[1]; ?></td>
                        <td><?= $value[2]; ?></td>
                        <td><?= $value[7]; ?></td>
                    </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                <?php foreach($data as $key => $value) : ?>
                <tr>
                    <td><?= $value[0]; ?></td>
                    <td><?= $value[1]; ?></td>
                    <td><?= $value[2]; ?></td>
                    <td><?= $value[7]; ?></td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>