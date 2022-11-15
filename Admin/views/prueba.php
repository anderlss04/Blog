<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body>
<div class="estado-i active" *ngIf="view" (click)="mostrar()">
    <app-login></app-login>

</div>

<div class="main" *ngIf="view2">
    <div class="slidenav">
        <div class="logo ">
            <img src="../assets/images/logo_jace_verde.png" alt="">
        </div>
        <nav class="menu">
            <div class="menu-container">
                <div class="menu-container-items">
                    <div class="menu-item">
                        <div class="menu-item-label-content">
                            <div class="menu-item-label-content-element">
                            </div>

                        </div>

                    </div>
                    <div class="menu-item">
                        <div class="menu-item-label-content">
                            <div class="menu-item-label-content-element">
                                <span>Lista</span>
                            </div>

                        </div>

                    </div>
                    <div class="menu-item-group menu-element">
                        <div class="menu-item-label-content item">
                            <div class="menu-item-label-content-element element">
                                <span>
                              <span class=" general-icon icon"><i class="fa-solid fa-circle-user"></i></span>
                                <a href="" routerLink="/profile/profile"> <span class="label-name"> Perfil </span></a>
                                </span>
                            </div>
                            <div class="icon-down"></div>
                        </div>
                    </div>
                    <div class="menu-item-group menu-element ">
                        <div class="menu-item-label-content item">
                            <div class="menu-item-label-content-element element">
                                <span>
                            <span class="general-icon icon"><i class="fa fa-dolly"></i></span>
                                <a href="" routerLink="/envios/envio" routerLinkActive="activebutton"> <span class="label-name"> Envios </span></a>
                                </span>
                            </div>
                            <div class="icon-down"></div>
                        </div>
                    </div>
                    <div class="menu-item-group menu-element">
                        <div class="menu-item-label-content item">
                            <div class="menu-item-label-content-element element">
                                <span>
                          <span class="general-icon icon"><i class="fa fa-truck"></i></span>
                                <a href="" routerLink="/transporte/transporte" routerLinkActive="activebutton"> <span class="label-name"> Coches</span></a>
                                </span>
                            </div>
                            <div class="icon-down"></div>
                        </div>
                    </div>
                    <!-- <div class="menu-item-group menu-element">
                        <div class="menu-item-label-content item">
                            <div class="menu-item-label-content-element element">
                                <span>
                        <span class="general-icon icon"><i class="fas fa-chart-line"></i></span>
                                <a href="" routerLink="/log/log"> <span class="label-name"> Log </span></a>
                                </span>
                            </div>
                            <div class="icon-down"></div>
                        </div>
                    </div> -->

                </div>

            </div>

        </nav>

    </div>
    <div id="content-second" class="content">
        <div class="header">
            <ul class="nav nav-left" id="#bread">
                <li class="nav-item active"><a href="" class="nav-link" data-value="Perfil" routerLink="/profile/profile" routerLink="/envios/envio"> Perfil </a></li>
                <li class="nav-item"><a href="" class="nav-link" data-value="Envios" routerLink="/envios/envio" routerLinkActive="activebutton"> Envios </a></li>
                <li class="nav-item"><a href="" class="nav-link" data-value="Coches" routerLink="/transporte/transporte" routerLinkActive="activebutton">  Coches </a></li>
                <!-- <li class="nav-item"><a href="" class="nav-link" data-value="Logística"> Logística </a></li> -->
            </ul>
            <ul class="nav nav-right">
                <li id="search" class="nav-item search">
                    <span><a href=""><i class="fas fa-search mx-2 search color-search"></i></a></span>
                </li>
                <li id="profile" class="nav-item profile">
                    <div class="user">
                        <img src="../assets/images/jace-verde.png" alt="" width="100px">
                        <div class="user-name">HI</div>
                        <div class="avatar"></div>

                    </div>
                </li>

            </ul>

        </div>
        <div class="breadcrumb ">
            <div class="breadcrumb-content">
                <div class="breadcrumb-item" id="bread-body">
                    <h6 class="title-b" id="breadcrumb-title">HOME</h6>
                    <ul class="list-b" id="breadcrumb-list">
                        <li class="breadcrumb-item">
                            <a href="./" class="text-b">Home</a>
                        </li>

                    </ul>

                </div>
                <!-- <div class="breadcrumb-item">
                    <div class="btn-view">
                        <button class="btn color-btn-simple mx-2" onclick="organizeLeft()"><i class="fas fa-columns"></i></button>
                        <button class="btn color-btn-simple mx-2" onclick="OrganiceColum()"><i class="fas fa-columns"></i></button>
                    </div>
                </div> -->

            </div>

        </div>
        <div id="content" class="">
            <div class="content-view">
                <div class="container">

                    <router-outlet></router-outlet>
                </div>

            </div>


        </div>
    </div>
</div>

</body>
</html>