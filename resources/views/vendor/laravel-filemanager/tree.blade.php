<ul class="list-unstyled">
  @foreach($root_folders as $root_folder)
    <li>
      <a class="clickable folder-item" data-id="{{ $root_folder->path }}">
        <i class="fa fa-folder"></i> {{  Illuminate\Support\Str::limit($root_folder->name ,$limit = 10,$end='...')}}
      </a>
    </li>
    @foreach($root_folder->children as $directory)
      <li style="margin-left: 10px;">
        <a class="clickable folder-item" data-id="{{ $directory->path }}">
          <i class="fa fa-folder"></i> {{ Illuminate\Support\Str::limit($directory->name ,$limit = 10,$end='...')}}
        </a>
      </li>
    @endforeach
    @if($root_folder->has_next)
      <hr>
    @endif
  @endforeach
</ul>
