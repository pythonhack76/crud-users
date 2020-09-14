<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'includes/head.php'; ?>
</head>

<body>
    <?php require_once 'includes/header.php'; ?>
    <div class="container-fluid">
        <div class="row">
            <?php require_once 'includes/sidebar.php'; ?>
            <main role='main' class="col-md-9 ml-sm-auto col-lg-10 px-4">

                <h1 style="margin-top: 10px">Aggiungi / Edita Utenti</h1>
                <p>I campi contrassegnati con (*) sono obbligatori</p>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input class="form-control" type="text" name="id" id="id" value="" readonly>
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Nome e Cognome" required maxlength="100" value="">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="email" placeholder="joedoe@gmail.com" required maxlength="100" value="">
                    </div>
                    <input class="btn btn-primary mb-2" type="button" name="btn_save" value="Salva">

                </form>
            </main>
        </div>
    </div>
    <?php require_once 'includes/footer.php'; ?>
</body>

</html>