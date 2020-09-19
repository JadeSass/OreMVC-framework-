<?php include sectionStart; ?>
    <style>
        * {
            background-color: white;
        }
        .app-text {
            font-size: 8rem;
            color: black;
            font-weight: 100;
        }
        
    </style>
    <div class="container-fluid">
        <h1 class="app-text text-center text-capitalize"><?php echo $data['title']; ?></h1><br>
        <h5 class="text-center text-capitalize"><?php echo $data['description']; ?></h5>
        <p class="text-center mt-4">Version <b><?php echo APP_VERSION?></b> Beta Release.</p>
    </div>
<?php include sectionStop; ?>