<!DOCTYPE html>
<html lang="en">

    
<body>
<script src="admin_assets/script.js"></script>
    <div class="container" style="display: grid;
            grid-template-columns: 1fr 5fr;
            height: 100vh;">
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
                        <a href="/edit?eid={{$text->id}}"><i class="bi bi-pencil-square btninfosend"></i></a> 
                        <a href="/delete?did={{$text->id}}"><i class="bi bi-trash3 btninfosend"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </main>
    </div>
    
</body>
</html>
