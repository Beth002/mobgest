@extends('welcome')
@section('Contenu')
    <form method="POST">
        @csrf
        <div class="container">
            <div class="row">
                <div class="row">
                    <div style="text-align: center">
                        <strong>
                            <h3>
                                Enregistrement Mobilier
                            </h3>
                        </strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Nom</label>
                            <input type="text" name="nom" id="form2Example17" class="form-control form-control-lg" />
                            @error('nom')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Adresse</label>
                            <input type="text" name="adresse" id="form2Example17" class="form-control form-control-lg" />
                            @error('adresse')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Prix</label>
                            <input type="text" name="prix" id="form2Example17" class="form-control form-control-lg" />
                            @error('prix')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Taille</label>
                            <input type="text" name="taille" id="form2Example17" class="form-control form-control-lg" />
                            @error('taille')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-outline mb-2">
                            <label class="form-label" for="form2Example17">Photo</label>
                            <input type="file" accept=".png, .jpg" name="image" id="form2Example17"
                                class="form-control form-control-lg" />
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example17">Description</label>
                        <textarea name="description" id="" class="form-control"></textarea>
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>

    </form>
@endsection
