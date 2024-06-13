<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
            role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
            role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profile</button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
            role="tab" aria-controls="contact-tab-pane"> <a href="{{ Route('home.mobilier') }}">Admin</a></button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane"
            type="button" role="tab" aria-controls="disabled-tab-pane" aria-selected="false"
            disabled>Disabled</button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">


        <section style="background-color: #eee;">
            <div class="container py-5">
                <div class="row justify-content-center mb-3">
                    <div class="col-md-12 col-xl-10">
                        <div class="card shadow-0 border rounded-3">
                            <div class="card-body">

                                @forelse ($mobiliers as $items)
                                    {{-- Start Items --}}
                                    <div class="row">
                                        <div class="col-md-12 col-lg-3 col-xl-3 mb-4 mb-lg-0">
                                            <div class="bg-image hover-zoom ripple rounded ripple-surface">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/img%20(4).webp"
                                                    class="w-100" />
                                                <a href="#!">
                                                    <div class="hover-overlay">
                                                        <div class="mask"
                                                            style="background-color: rgba(253, 253, 253, 0.15);"></div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 col-xl-6">
                                            <h5>{{$items->nom}}</h5>
                                            <div class="d-flex flex-row">
                                                <div class="text-danger mb-1 me-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <span>{{$items->adresse}}</span>
                                            </div>
                                            <div class="mt-1 mb-0 text-muted small">
                                                <span>{{$items->taille}}</span>
                                                {{-- <span class="text-primary"> • </span>
                                                <span>Light weight</span>
                                                <span class="text-primary"> • </span>
                                                <span>Best finish<br /></span> --}}
                                            </div>
                                            {{-- <div class="mb-2 text-muted small">
                                                <span>Unique design</span>
                                                <span class="text-primary"> • </span>
                                                <span>For men</span>
                                                <span class="text-primary"> • </span>
                                                <span>Casual<br /></span>
                                            </div> --}}
                                            <p class="text-truncate mb-4 mb-md-0">
                                                {{$items->description}}
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-lg-3 col-xl-3 border-sm-start-none border-start">
                                            <div class="d-flex flex-row align-items-center mb-1">
                                                <h4 class="mb-1 me-1">{{$items->prix}} $/Mois</h4>
                                                <span class="text-danger"><s>$20.99</s></span>
                                            </div>
                                            <h6 class="text-success">Free shipping</h6>
                                            <div class="d-flex flex-column">
                                                <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-primary btn-sm mt-2" type="submit">
                                                    Modifier
                                                </button>
                                            {{-- </div> --}}
                                                <form method="POST" action="{{route('home.destroy',['id' => $items->id])}}">
                                                    @csrf
                                            {{-- <div class="d-flex flex-column mt-4"> --}}
                                                    <button data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-outline-danger btn-sm mt-2" type="submit">
                                                    Supprimer
                                                </button>
                                            {{-- </div> --}}
                                                </form>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="text-primary"> • • • • • • • • • • • • •
                                                 • • • • • • • • • • • • • • • • • • • • • • • • •
                                                  • • • • • • • • • • • • • • • • • • • • • • • • •
                                                   • • • • • • • • • • • • • • • • • • •</span>
                                        </div>
                                    </div>
                                @empty
                                <div style="text-align: center">
                                    <strong>Pas d'Immobilier</strong>
                                </div>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
