<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="admin_assets/style.css">

</head>

<body>
    <script src="admin_assets/script.js"></script>
    <div class="container" style="grid-template-columns: 1fr 5fr;">
        <aside class="left-section">
            @include('layouts.sidebar')
        </aside>
        <main>
            <header>
                <button class="menu-btn" id="menu-open">
                    <i class='bx bx-menu'></i>
                </button>
            </header>

            <div class="separator">
                <div class="search">
                    <i class='bx bx-search'></i>
                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search" title="Type in a name">
                </div>
            </div>
            <table id="myTable">
                <tr class="header">
                    <th style="width:90%;">Yazı</th>
                    <th style="width:10%;">İşlem</th>
                </tr>
                @foreach($veri->all_texts as $text)
                <tr>
                    <td>{!! $text->contents !!}</td>
                    <td style="text-align:center;">
                        <button type="button" class="btn bi bi-trash3" data-toggle="modal" data-target="#deleteTextModal{{$text->id}}"></button>
                    </td>

                </tr>
                <div class="modal" id="deleteTextModal{{$text->id}}">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Sil</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <form action="{{route('textdelete',$text->id)}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input class="form-control" type="text" name="id" value="{{$text->id}}" hidden><br>

                                    <label class="form-label" for="newcontent">Content :</label>
                                    <input class="form-control" type="text" name="newcontent" value="{{$text->contents}}" readonly><br>
                                    Seçtiklerinizi silmek istediğinizden emin misiniz?
                                    <div class="modal-footer ">
                                        <input class="col-5" type="submit" class="btnslider" value="SİL" name="btndeletetext">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </table>
        </main>
    </div>


    <script>
        $(document).on("click", ".btndeletetext", function() {
            var id = $(this).data('id');
            var el = this;
            $.ajax({
                url: 'delete/' + id,
                type: 'get',
                success: function(response) {
                    $(el).closest("tr").remove();
                    alert(response);
                }
            });
        });
    </script>
</body>

</html>