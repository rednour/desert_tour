<div>
    <div>
     <a href="{{url('tours/create')}}">form</a>
    </div>
    <div>
        <h1>les tour d'agence</h1>
       <table>
        <thead>
        <tr>
            <th>name de tour</th>
            <th> nombre de jour</th>
            <th>le lieu</th>
            <th>langue</th>
        </tr>
        </thead>
        <tbody>
          @foreach ($list as $lis)   
            <tr>
                  <td>{{$lis->Nom_tour}}</td>
                  <td>{{$lis->nmbr_jour}}</td>
                  <td>{{$lis->traget}}</td>
                  <td>{{$lis->langue}}</td> 
                  <td>
                  <form action="{{url('tours/'.$lis->id)}}" method="POST">
                    @csrf
                    @method('delete')
                     <h2><a href="{{url('tours/show')}}">detail</a></h2>
                     <h2><a href="{{url('tours/'.$lis->id.'/edit')}}">edite</a></h2>
                     <h2><button type="submit">delete</button></h2>
                    </form>
                     
                 </td>
            </tr>       
           
        
          @endforeach
        </tbody>
        
       
               
    </table>
    </div>
    
    
    
    
</div>