<!-- partie liste -->
<!DOCTYPE html>
<html lang="en">

@include('partials.header')

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('partials.sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('partials.navbar')
            <!-- Navbar End -->

            <!-- Sale & Revenue Start -->
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Listes  des fournisseurs</h6>
                    <form action="{{route('recherche.fourniseur')}}" method="POST">
                    @csrf
                      <input type="text" name="search" placeholder="recherche..." required>
                      <button type="submit" class="btn btn-success">Valider</button>
                    </form>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Numero</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tel</th>
                                    <th scope="col">adresse</th>
                                    <th scope="col">Details</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($fournisseur as $user)
                                    <tr>
                                        <th scope="row">{{ $user->id }}</th>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->tel }}</td>
                                        <td>{{ $user->adresse }}</td>

                                        <td><a href="{{route('details.fournisseur',['id'=>$user->id])}}" class="btn btn-dark"><i class="bi bi-eye-fill"></i></a></td>

                                        <td>   <a hredf="#" onclick="confirmDelete('{{ route('delete.fournisseur', ['id' => $user->id]) }}')" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a> </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$fournisseur->links()}}
                    </div>
                </div>
            </div>

                    <!-- partie ajouter fournisseur -->

                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Ajouter fourniseur
                </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                    <form action="{{route('ajouter.fournisseur')}}" method="POST" class="form-group" enctype="multipart/form-data">
                        @csrf
                            <div class="mb-3">
                            <label for="nom" class="form-label">Nom</label>
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="veuillez mettre votre nom">
                            </div>

                            <div class="mb-3">
                                <label for="adresse" class="form-label">adresse</label>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="veuillez mettre votre adresse">
                            </div>

                            <div class="mb-3">
                                <label for="profil" class="form-label">profil</label>
                                <input type="file" class="form-control" id="profil" name="profil" placeholder="veuillez mettre votre profil">
                            </div>

                            <div class="mb-3">
                                <label for="tel" class="form-label">tel</label>
                                <input type="text" class="form-control" id="tel" name="tel" placeholder="veuillez mettre votre number">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">e-mail</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="veuillez mettre votre email">
                            </div>
                            
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                            <button type="submit" class="btn btn-primary">Valider</button>
                        </div>
                    </form>
                        </div>
                       
                    </div>
                </div>
            </div>

            @include('partials.footer')
            <!-- Footer End -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    @include('partials.js')
    <script>
    function confirmDelete(deleteUrl) {
        if (confirm("Êtes-vous sûr de vouloir supprimer cet élément ?")) {
            window.location.href = deleteUrl;
        }
    }
</script>
</body>

</html>
