@include('sc_head')
<style>
    .search1{
        margin:10px;
        width:500px;
        float:right;
    }
</style>
<div class="search1">
        <form action="/blog/cari" role="search" class="searchform input-group">
            <input type="search" name="cari" class="form-control" placeholder="Search" value="{{old('cari')}}">
        <span class="input-group-addon"><button type="submit" value="Cari"><i class="fa fa-search"></i></button></span>
    </form>
</div>

@include('sc_footer')