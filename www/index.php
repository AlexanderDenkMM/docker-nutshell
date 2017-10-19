<?php

require_once 'init.php';

if (!empty($_POST)) {
    db()->insert('account', [
        'name'  => $_POST['name'],
        'mail'  => $_POST['mail']
    ]);
}

$accounts = db()->select('account', [
    'id',
    'name',
    'mail'
]);

?>
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    </head>
    <body>
        <div class="container">
            <h1>Fancy List</h1>
            <p>&nbsp;</p>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($accounts as $account): ?>
                        <tr>
                            <th scope="row"><?php echo $account['id']; ?></th>
                            <td><?php echo $account['name']; ?></td>
                            <td><?php echo $account['mail']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <p>&nbsp;</p>
            <h2>Neuer Account</h2>
            <div class="row">
                <div class="col s12 m6">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <form class="col s12" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="name" name="name" type="text" class="validate">
                                            <label for="name">Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input id="mail" name="mail" type="email" class="validate">
                                            <label for="mail">Mail</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col s12">
                                            <button type="submit" class="btn">Eintragen</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
