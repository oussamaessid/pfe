<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Event;
use Illuminate\Http\Request;
use App\Events\MyEvent;

class CommandController extends Controller
{
    public function ajouterCommande(Request $request)
    {
        $id_client = $request->input('id_client');
        $prix_total = $request->input('prix_total');
        $num_chambre = $request->input('num_chambre');
        // Récupérer le solde du client
        $solde = DB::table('users')->where('id', $id_client)->value('solde');



        // Vérifier si le solde est suffisant pour couvrir le coût total de la commande
        if ($solde < $prix_total) {

            return response()->json(['success' => false, 'message' => 'solde insuffisant.']);
        }
         // déduire le prix du plan du solde du client et mettre à jour le solde dans la base de données
         $nouveau_solde = $solde - $prix_total;
         DB::table('users')->where('id', $id_client)->update(['solde' => $nouveau_solde]);
        // enregistrer les informations de l'achat dans la table d'historique
        $historique = [
            'id_user' => $id_client,
            'id_service' => $request->input('id_service'),
            'montant' => $prix_total,
            'id_hotel' => $request->input('id_hotel'),
            'date' => now()
        ];
        DB::table('historique')->insert($historique);

        // Autoriser l'ajout de la commande
        $commande = new Commande();
        $commande->id_client = $id_client;
        $commande->prix_total = $prix_total;
        $commande->date = now(); // ajouter la date actuelle


        $commande->save();
        $data = [
            'message' => 'Nouvelle commande passé',
            'achat' => $commande,
        ];
        //Event::dispatch(new MyEvent($commande));




        // Mettre à jour le solde du client
        DB::table('users')->where('id', $id_client)->decrement('solde', intval($prix_total));

        // Vider le panier pour le client spécifique
        DB::table('panier')->where('id_client', $id_client)->delete();

        return response()->json(['status' => 200, 'success' => true, 'message' => 'Commande ajoutée avec succès.']);
    }
}
