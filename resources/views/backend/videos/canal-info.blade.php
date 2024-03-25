@extends('backend.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <div class="page-categories">
                    <h3 class="title text-center"> Canal de Youtube </h3>
                    <br />
                    <ul class="nav nav-pills nav-pills-warning nav-pills-icons justify-content-center" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#link7" role="tablist">
                                <i class="material-icons">info</i> Información
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#link8" role="tablist">
                                <i class="material-icons">edit_square</i> Editar
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content tab-space tab-subcategories">
                        <div class="tab-pane active" id="link7">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Informacion de la cuenta de Youtube
                                        {{-- <i
                                            class="material-symbols-outlined">
                                            youtube_activity
                                        </i> --}}
                                    </h4>

                                    <p class="card-category text-warning">
                                        <i class="material-icons">warning</i> La información de la cuenta de google es muy
                                        importante no la divulgue!.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <div class="list-group">
                                        <a href="https://www.youtube.com" target="_blank"
                                            class="text-center d-flex w-25 btn btn-success  margin-auphpto">Subir video a
                                            Youtube</a>
                                        <a href="javascript:void(0)" class="list-group-item list-group-item-action"
                                            aria-current="true">
                                            Correo:
                                        </a>
                                        <a href="javascript:void(0)"
                                            class="list-group-item list-group-item-action">Contraseña:</a>
                                        <a href="https://www.youtube.com/channel/UCU4_F0EHQJFW07LsXS7mCZA"
                                            class="list-group-item list-group-item-action" target="_blank">Enlace
                                            del canal de Youtube:
                                            <span
                                                class="text-success">https://www.youtube.com/channel/UCU4_F0EHQJFW07LsXS7mCZA</span></a>
                                        <h4 class="mt-3 text-danger">¿Como subir Video a youtube?</h4>
                                        <p class='text-info'>Video tutorial</p>
                                        <a href="https://www.youtube.com" target="_blank"
                                            class="d-flex justify-content-center">
                                            <img class="thumbnail-border-color margin-auto" style="height: 20em;"
                                                src="{{ asset('images/gifs/video-play.gif') }}" class="img-fluid"
                                                alt="...">
                                        </a>
                                    </div>
                                    <div class="row">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane " id="link8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Location of the product</h4>
                                    <p class="card-category">
                                        More information here
                                    </p>
                                </div>
                                <div class="card-body">
                                    Efficiently unleash cross-media information without cross-media value. Quickly maximize
                                    timely deliverables for real-time schemas.
                                    <br>
                                    <br> Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="link9">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Legal info of the product</h4>
                                    <p class="card-category">
                                        More information here
                                    </p>
                                </div>
                                <div class="card-body">
                                    Completely synergize resource taxing relationships via premier niche markets.
                                    Professionally cultivate one-to-one customer service with robust ideas.
                                    <br>
                                    <br>Dynamically innovate resource-leveling customer service for state of the art
                                    customer service.
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="link10">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Help center</h4>
                                    <p class="card-category">
                                        More information here
                                    </p>
                                </div>
                                <div class="card-body">
                                    From the seamless transition of glass and metal to the streamlined profile, every detail
                                    was carefully considered to enhance your experience. So while its display is larger, the
                                    phone feels just right.
                                    <br>
                                    <br> Another Text. The first thing you notice when you hold the phone is how great it
                                    feels in your hand. The cover glass curves down around the sides to meet the anodized
                                    aluminum enclosure in a remarkable, simplified design.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
