<form action="{{ route($view .'.destroy',  $data->id ) }}" method="POST">
    @csrf
    @method("DELETE")

    <td>
        <a href="{{ route($view . '.show', $data->id) }}" class="btn btn-info btn-sm">
            Show
        </a>
        <a href="{{ route($view . '.edit', $data->id) }}" class="btn btn-warning btn-sm">
            Ubah
        </a>
        <button type="submit" class="btn btn-danger btn-sm ">
            Hapus
        </button>
    </td>

</form>

