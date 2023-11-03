<li class="<?php echo ($current_page === 'index.php') ? 'active' : ''; ?>"><a data-scroll href="index.php">Accueil</a></li>
<li class="<?php echo ($current_page === 'about.php' || $current_page === 'mission-valeur.php' || $current_page === 'team.php') ? 'active' : ''; ?>"><a data-scroll="" href="">Le CFGE</a>
<ul class="dropdown list-unstyled">
        <li><a href="about.php">A Propos</a></li>
        <li><a href="mission-valeur.php">Missions et Valeurs</a></li>
        <li><a href="team.php">Une équipe à votre service</a></li>
    </ul>
</li>
<li class="<?php echo ($current_page === 'lstcf.php' || $current_page === 'mcca-escae.php' || $current_page === 'dcg.php' || $current_page === 'dscg.php' || $current_page === 'lcca.php' || $current_page === 'gestion.php' || $current_page === 'mcca-intec.php' || $current_page === 'audit.php' || $current_page === 'auditsy.php' || $current_page === 'comptabilite.php' || $current_page === 'lcca.php') ? 'active' : ''; ?>"><a data-scroll="" href="">NOS PROGRAMMES</a>
    <ul class="dropdown list-unstyled">
        <li class="dropdown-list-box-02"><a href="#">CAMES<i class="fa fa-angle-right menu-icon"></i></a>
            <ul class="dropdown-list_2 list-unstyled">
                <li><a href="lstcf.php">LSTCF</a></li>
                <li><a href="mcca-escae.php">MCCA ESCAE NIAMEY</a></li>
            </ul>   
        </li>
        <li class="dropdown-list-box-02"><a href="#">Français<i class="fa fa-angle-right menu-icon"></i></a>
            <ul class="dropdown-list_2 list-unstyled">
                <li><a href="dcg.php">DCG/DGC</a></li>
                <li><a href="dscg.php">DSCG/DSGC</a></li>
                <li><a href="lcca.php">LCCA INTEC</a></li>
                <li><a href="mcca-intec.php">MCCA INTEC</a></li>
            </ul>
        </li>
        <li class="dropdown-list-box-02"><a href="#">Certificats de specialisation<i class="fa fa-angle-right menu-icon"></i></a>
            <ul class="dropdown-list_2 list-unstyled">
                <li><a href="audit.php">Audit et contrôle légal des comptes</a></li>
                <li><a href="gestion.php">Gestion des associations (Comptabilité, Droit et Fiscalité)</a></li>
                <li><a href="comptabilite.php">Comptabilité Internationale</a></li>
                <li><a href="auditsy.php">Audit des Sytèmes d'Information</a></li>
            </ul>
        </li>
    </ul>
    <!-- dropdown end -->
</li>
<li class="<?php echo ($current_page === 'admission-post-bac.php' or $current_page === 'admission-post-bts.php' or $current_page === 'preinscription.php' or $current_page === 'faq.php') ? 'active' : ''; ?>"><a data-scroll href="">ADMISSION</a>
            <!-- dropdwon start -->
    <ul class="dropdown list-unstyled">
        <li><a href="admission-post-bac.php">POST-BAC</a></li>
        <li><a href="admission-post-bts.php">POST-BAC +2/3</a></li>
        <li><a href="faq.php">Lignes essentielles</a></li>
        <li><a href="preinscription.php">Préinscription en ligne</a></li>
        <li><a href="faq.php">Lignes essentielles</a></li>
    </ul>
            <!-- dropdown end -->
</li>
<li class="<?php echo ($current_page === 'contact.php') ? 'active' : ''; ?>"><a data-scroll href="contact.php">CONTACT</a>
</li>
<li><a data-scroll href=""></a></li>