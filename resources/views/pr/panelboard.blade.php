
<div class="list-group">
@foreach($timeline as $tline)
  
  <a href="#" class="list-group-item">
      <table width="100%">
          <tr><td rowspan="2" width="12%"><img src="{{ $tline->dp_url }}" class="img-circle" id="dp" width="80" height="80"></td>
              <td>
                  
                    <form action="/friendprofile" method="post">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="hidden" name="to_view" value="{{ $tline->member_id }}">
                    <button type="submit" class="btn btn-primary"> 
                    <strong> {{ $tline->username }} </strong></button></form>
                  
                  </td>
          </tr>
          <tr><td>{{ $tline->caption }}</td></tr>
          <tr><td align="center"><code>{{ $tline->title }}</code></td>
              <td><kbd><em>{{ $tline->tool_name }}</em></kbd></td>
          </tr>
      </table>
  </a>
  
  @endforeach
  
</div>