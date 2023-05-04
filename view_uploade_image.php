<?php
    $_title = 'Uploade image';
    require_once __DIR__ .'/comp_header.php';

?>

<main id="index">

    <h1 class="mt4 mb1"><?= $Random_dictionary[$language.'_image'] ?></h1>

    <form id="imageForm" action="api-upload.php" method="post" enctype="multipart/form-data" class="mt1">
        <div>
            <div class="formContainer">
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <div class="fakeContainer">
                <input class="fakeButton" type="submit" value="Upload Image" name="submit">
            </div>
        </div>
    </form>

</main>

<?php

require_once __DIR__ .'/comp_footer.php';

?>