<?php
headerAdmin($data);
?>
<main class="app-content">
    <div class="app-title">
        <div>
            <h1><i class="fas fa-user-tag"></i> <?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="<?= base_url(); ?>/suscriptores"><?= $data['page_title'] ?></a></li>
        </ul>
    </div>

    <!-- Contenedor del segundo video -->
   <div class="video-row">
    <!-- Primer video -->
    <div class="video-item">
        <h2>Experiencias Artesanos</h2>
        <div class="video-container">
            <video controls>
                <source src="<?= base_url() . '/Assets/videos/VIDEO EXPERIENCIAS ARTESANOS 1.mp4' ?>" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>
    </div>

    <!-- Segundo video -->
    <div class="video-item">
        <h2>Gestion Ambiental</h2>
        <div class="video-container">
            <video controls>
                <source src="<?= base_url() . '/Assets/videos/VIDEO Gestion Ambiental.mp4' ?>" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>
    </div>

    <!-- Tercer video -->
    <div class="video-item">
        <h2>Gestion Comercial</h2>
        <div class="video-container">
            <video controls>
                <source src="<?= base_url() . '/Assets/videos/VIDEO GESTION COMERCIAL .mp4' ?>" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>
    </div>

    <!-- Cuarto video -->
    <div class="video-item">
        <h2> Seguridad Y Salud En El Trabajo </h2>
        <div class="video-container">
            <video controls>
                <source src="<?= base_url() . '/Assets/videos/VIDEO SEGURIDAD Y SALUD EN EL TRABAJO .mp4' ?>" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
        </div>
    </div>
</div>



</main>
<?php footerAdmin($data); ?>