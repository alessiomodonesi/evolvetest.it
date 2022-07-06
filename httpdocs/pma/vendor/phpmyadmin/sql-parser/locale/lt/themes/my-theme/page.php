<?php
    get_header();
    //server
    $servername = "localhost";
    $username = "evolve";
    $password = "e_volvetest!8!";
    $db = "wp_evolve";
    $port = "3306";
    //local
    $usernameL = "root";
    $passwordL = "";
    $dbL = "wordpress";

    $connect = mysqli_connect($servername, $usernameL, $passwordL, $dbL, $port);
    //$query = "SELECT * FROM evo_cliente";
    $query = "SELECT * FROM wp_cliente";
    
    $result = mysqli_query($connect, $query) or die( mysqli_error($connect));
?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="title"><?php the_title(); ?></h1>
            <table id="table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Cognome</th>
                        <th>Data di nascita</th>
                        <th>Indirizzo</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Ufficio</th>
                        <th>Caso</th>
                        <th>Applicant</th>
                    </tr>
                </thead>
                <?php
                    while ($row = mysqli_fetch_array($result))
                    {
                        echo '
                        <tr>
                            <td>'.$row["id_cliente"].'</td>
                            <td>'.$row["nome"].'</td>
                            <td>'.$row["cognome"].'</td>
                            <td>'.$row["data_nascita"].'</td>
                            <td>'.$row["indirizzo"].'</td>
                            <td>'.$row["numero_telefono"].'</td>
                            <td>'.$row["mail"].'</td>
                            <td>'.$row["ufficio_usa"].'</td>
                            <td>'.$row["caso"].'</td>
                            <td>'.$row["id_applicant"].'</td>
                        </tr>
                        ';
                    }
                ?>
            </table>
            <?php if (have_posts()) : while(have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; endif; ?>
        </div>

    </div> 
</div>

<?php get_footer(); ?>
