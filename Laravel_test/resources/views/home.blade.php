@extends('_layouts.default')

@section('content')
   <div id="title" style="text-align: center;">
        <h1>Ian's Laravel Project</h1>

   </div>

   <hr>
   <div id="content">
     <div class="row">
         <div class="col-md-6 col-sm-6">
     <ul>
        @foreach ($pages as $page) 
        <li style="margin: 50px 0;">
            <div class="title">
               <a href="{{ URL('pages/'.$page->id) }}">
                   <h4>{{ $page->title }}</h4> 
               </a>
            </div>
            <div class="body">
               <p>{{ $page->body }}</p> 
            </div>
         </li>
         @endforeach 
     </ul>
     </div>
     <div class="col-md-6 col-sm-6">
              <ul>
                 @foreach ($articles as $article) 
                 <li style="margin: 50px 0;">
                    <div class="title">
                       <a href="{{ URL('articles/'.$article->id) }}">
                          <h4>{{ $article->title }}</h4> </a>
                    </div>
                    <div class="body">
                       <p>{{ $article->body }}</p> 
                    </div>
                 </li>
                 @endforeach 
            </ul>
            </div>
    </div>
  ￼</div> 
@endsection