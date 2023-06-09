<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AdminHotel
 *
 * @property int $id
 * @property string $nom
 * @property string $prénom
 * @property string $email
 * @property string $password
 * @property int $id_hotel
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel query()
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel whereIdHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel wherePrénom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AdminHotel whereUpdatedAt($value)
 */
	class AdminHotel extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\Commande
 *
 * @property int $id
 * @property int $prix_total
 * @property string $date
 * @property int $id_client
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande query()
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande wherePrixTotal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Commande whereUpdatedAt($value)
 */
	class Commande extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Event
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 * @property string|null $description
 * @property int $id_hotel
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\EventImage> $eventImages
 * @property-read int|null $event_images_count
 * @property mixed $end_date_time
 * @property mixed $start_date_time
 * @method static \Database\Factories\EventFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Event newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Event query()
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereIdHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Event whereUpdatedAt($value)
 */
	class Event extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\EventImage
 *
 * @property int $id
 * @property int $event_id
 * @property string $image_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Event|null $event
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage whereEventId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage whereImagePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|EventImage whereUpdatedAt($value)
 */
	class EventImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Historique
 *
 * @property int $id
 * @property int $id_hotel
 * @property int $id_service
 * @property int $id_user
 * @property string $date
 * @property float $montant
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Historique newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique query()
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereIdHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereIdService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereIdUser($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereMontant($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Historique whereUpdatedAt($value)
 */
	class Historique extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Hotel
 *
 * @property int $id
 * @property string $nom
 * @property string $localisation
 * @property string $prix
 * @property string $étoiles
 * @property string $image
 * @property string $description
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Service> $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel query()
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereLocalisation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Hotel whereÉtoiles($value)
 */
	class Hotel extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Menu
 *
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property int $id_service
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Plat> $plats
 * @property-read int|null $plats_count
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu query()
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereIdService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Menu whereUpdatedAt($value)
 */
	class Menu extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Notification
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $message
 * @property int|null $service_id
 * @property int|null $admin_id
 * @property string|null $type
 * @property string|null $data
 * @property string $notifiable_type
 * @property int $notifiable_id
 * @property string|null $read_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $url
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification query()
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereAdminId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereNotifiableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Notification whereUserId($value)
 */
	class Notification extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Offre
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Offre newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offre newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Offre query()
 */
	class Offre extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Panier
 *
 * @property int $id
 * @property int $id_client
 * @property int $id_plat
 * @property int $quantite
 * @property float $prix
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $total
 * @property-read \App\Models\Plat|null $plat
 * @method static \Illuminate\Database\Eloquent\Builder|Panier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Panier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Panier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereIdPlat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereQuantite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Panier whereUpdatedAt($value)
 */
	class Panier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Personne
 *
 * @property int $id
 * @property string $nom
 * @property string $prénom
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $statut
 * @property int $solde
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Personne newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Personne newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Personne query()
 * @method static \Illuminate\Database\Eloquent\Builder|Personne whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne wherePrénom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne whereSolde($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Personne whereStatut($value)
 */
	class Personne extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\Plans
 *
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property int $prix
 * @property string $image
 * @property int $id_service
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Plans newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plans newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plans query()
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereIdService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plans whereUpdatedAt($value)
 */
	class Plans extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Plat
 *
 * @property int $id
 * @property string $nom
 * @property string $description
 * @property string $prix
 * @property string $image
 * @property string $categorie
 * @property int $id_menu
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Plat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plat newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Plat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereCategorie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereIdMenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat wherePrix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Plat whereUpdatedAt($value)
 */
	class Plat extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Products
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Products newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Products query()
 */
	class Products extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id_service
 * @property string $nom
 * @property string $description
 * @property string $image
 * @property string $type
 * @property int $id_hotel
 * @property string|null $created_at
 * @property string|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIdHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereIdService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 */
	class Service extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string|null $photo
 * @property string $email
 * @property string $password
 * @property string $role
 * @property string $statut
 * @property int $solde
 * @property int $id_hotel
 * @property int $id_service
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $num_chambre
 * @property-read \App\Models\Hotel|null $hotel
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdHotel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIdService($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNumChambre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSolde($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Tymon\JWTAuth\Contracts\JWTSubject {}
}

namespace App\Models{
/**
 * App\Models\achats_plans
 *
 * @property int $id
 * @property int $montant_paye
 * @property int $id_client
 * @property int $id_plan
 * @property string|null $created_at
 * @property string|null $updated_at
 * @property string|null $date
 * @property string|null $time
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans query()
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereIdClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereIdPlan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereMontantPaye($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|achats_plans whereUpdatedAt($value)
 */
	class achats_plans extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\pays
 *
 * @property int $id
 * @property string $nom
 * @property string $image
 * @property string $nombrehotels
 * @property string $path
 * @method static \Illuminate\Database\Eloquent\Builder|pays newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|pays newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|pays query()
 * @method static \Illuminate\Database\Eloquent\Builder|pays whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pays whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pays whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pays whereNombrehotels($value)
 * @method static \Illuminate\Database\Eloquent\Builder|pays wherePath($value)
 */
	class pays extends \Eloquent {}
}

