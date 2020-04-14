<?php

namespace App\Http\Controllers;
use App\Repositories\CommandeAbonneRepository;
use Illuminate\Http\Request;
use App\CommandeAbonne;
use App\ProduitCommandeAb;
use Illuminate\Support\Facades\DB;

class CommandeAbonneController extends Controller
{
     public function __construct()
                {
                   $this->service = new CommandeAbonneRepository();
                }

                   /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function getall()
  {
      $data = $this->service->all();
    
      return $data;
  }
  
  public function index()
  {
      $data = $this->service->all();
     /* foreach($data as &$value){
          $value->stockCouleur;
    }*/
      return $data;
  }




  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
     

   if($request->post("id")){
      $tabPr=$request->post("tabPr");
      $tabqte=$request->post("tabqte");
   
      for($i=0;$i<count($tabqte);$i++){
         $M=new ProduitCommandeAb();
         $M->produit_id=$tabPr[$i];
         $M->commandeab_id=$request->post("id");
         $M->nombre= $tabqte[$i];
         $M->save();
      }
      
   }else{
      $tabPr=$request->post("tabPr");
      $tabqte=$request->post("tabqte");
   
      $Modele=new CommandeAbonne();
      $Modele->date=$request->post("date");
      $Modele->mois=$request->post("mois");
      $Modele->nombreticket=$request->post("nombreticket");
      $Modele->abonne_id=$request->post("abonne_id");
      $Modele->save();
     
      for($i=0;$i<count($tabqte);$i++){
         $M=new ProduitCommandeAb();
         $M->produit_id=$tabPr[$i];
         $M->commandeab_id=$Modele->id;
         $M->nombre= $tabqte[$i];
         $M->save();
      }
   }
   

   // $this->service->create($request->all());
  //  DB::table('fraisspeciaux')->insert($request->all());
    return response()->json('Added succesfully');

    /*$data = $request->all();

    $this->service->create($data);
    return response()->json($data, '201');*/
  }
   /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      //
     $data= $this->service->find($id);
    return response()->json($data, '200');
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  function destroy ($id)
  {

      //$user=User::findorfail($id);
 
      
      try{
         // $user= request()->user();
          $res = $this->service->delete($id);
          //$user->delete();
          return response()->json("Suppression effectue avec succes",'204');
      } catch (\Exception $e) {
           Log::error($e->getMessage());
           return response()->json("Une erreur est survenue lors de la modification, Veuiller contacter l'administrateur",'201');
      }

  }
  

  function update (Request $request,$id)
  {

      try
          {
             DB::table('commande_abonnes')->where('id',$id)->update($request->all());
            /* $res = $this->service->update($data,$id);
             if ($res) {
                return response()->json($res, '201');
            }*/
          } catch (\Exception $e) {
               Log::error($e->getMessage());
                      return response()->json("Une erreur est survenue lors de la modification, Veuiller contacter l'administrateur",'201');
          }

  }
  
  public function getcommande($id) {
   $qry = 'SELECT  *
   FROM  commande_abonnes ab where  ab.abonne_id ='.$id.'';

   $data = DB::select($qry);
   return response()->json($data, '200');
}


  
}
