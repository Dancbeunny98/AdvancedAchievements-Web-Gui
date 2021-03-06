<?php
// Quitamos los anuncios molestos para los logros que no cuentan con Meta
error_reporting(error_reporting() & ~E_NOTICE);

// Generador de nombre único. Generará un total de seis caracteres aleatorios para el identificador del logro
for ($s = '', $i = 0, $z = strlen($a = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789')-1; $i != 6; $x = rand(0,$z), $s .= $a{$x}, $i++);


// Comprobamos si el formulario ha sido completado, verificando que el campo oculto "formCompletion" haya sido recibido
if(isset($_POST['formCompletion'])) {

  /*
  |
  | $aachDisplayname: Nombre que se mostrará al recibir el logro
  | $aachMessage: Descripción del logro
  | $aachTier: Rareza del logro, ya sea común o raro
  | $aachType: El tipo de logro conforme todos los posibles tipos del plugin (Place, Break, Kills, etc)
  | $aachObjective: Variable especial para definir el número de objetivos de "x" tipo de logro
  | $aachMeta: Algunos logros necesitan datos adicionales, como nombre de materiales o entidades
  | $aachReward: El tipo de recompensa que se le dará al jugador al completar el logro
  | $aachDataReward: El monto a recibir de la recompensa elegida
  |
  */

  $aachDisplayname    =   $_POST['achievementDisplayName'];
  $aachMessage        =   $_POST['achievementDescription'];
  $aachTier           =   $_POST['achievementTier'];
  $aachType           =   $_POST['achievementType'];
  $aachObjective      =   $_POST['achievementObjective'];
  $aachMeta           =   $_POST['achievementMeta'];
  $aachReward         =   $_POST['achievementReward'];
  $aachDataReward     =   $_POST['achievementRewardData'];
  $systemRedirect     =   "../success.php";


// Comenzamos a generar los logros en archivos diferentes, dependiendo del tipo de logro que se seleccionó en el formulario
switch ($aachType) {

    // Generador de logros para tipo: Places
    case 'blockPlace':
      require "cases/blockplace.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Break
    case 'blockBreak':
      require "cases/blockbreak.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Kills
    case 'entityKills':
      require "cases/entitykills.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: TargetsShoot
    case 'targetShoot':
      require "cases/targetshoot.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Craft
    case 'playerCrafts':
      require "cases/playercrafts.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Breed
    case 'animalBreeding':
      require "cases/animalbreeding.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Connections
    case 'playerConnections':
      require "cases/playerconnections.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Deaths
    case 'playerDeaths':
      require "cases/playerdeaths.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Arrow
    case 'usedArrows':
      require "cases/usedarrows.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Snowballs
    case 'thrownSnowballs':
      require "cases/thrownsnowballs.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Eggs
    case 'thrownEggs':
      require "cases/throwneggs.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Fish
    case 'capturedFish':
      require "cases/capturedfish.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Treasures
    case 'capturedTreasures':
      require "cases/capturedtreasures.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Breaks
    case 'itemBreaks':
      require "cases/itembreaks.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Eaten Items
    case 'eatenItems':
      require "cases/eatenitems.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Shear
    case 'animalShear':
      require "cases/animalshear.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Milk
    case 'cowMilking':
      require "cases/cowmilking.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Water Buckets
    case 'bucketWater':
      require "cases/bucketwater.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Lava Buckets
    case 'bucketLava':
      require "cases/bucketlava.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Enchantments
    case 'itemEnchantments':
      require "cases/itemenchantments.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Trades
    case 'villagerTrades':
      require "cases/villagertrades.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Anvils Used
    case 'usedAnvils':
      require "cases/usedanvils.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Beds
    case 'usedBeds':
      require "cases/usedbeds.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Max Level
    case 'maxLevel':
      require "cases/maxlevel.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Consumed Potions
    case 'usedPotions':
      require "cases/usedpotions.php";
      header("Location: $systemRedirect");
      break;


    // Generador de logros para tipo: Played Time
    case 'playedTime':
      require "cases/playedtime.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Foot
    case 'distanceFoot':
      require "cases/distancefoot.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Pig
    case 'distancePig':
      require "cases/distancepig.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Horse
    case 'distanceHorse':
      require "cases/distancehorse.php";
      header("Location: $systemRedirect");
      break;


    // Generador de logros para tipo: Distance Minecart
    case 'distanceMinecart':
      require "cases/distanceminecart.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Boat
    case 'distanceBoat':
      require "cases/distanceboat.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Gliding
    case 'distanceGliding':
      require "cases/distancegliding.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Llama
    case 'distanceLlama':
      require "cases/distancellama.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Distance Sneaking
    case 'distanceSneaking':
      require "cases/distancesneaking.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Item Drops
    case 'itemDrops':
      require "cases/itemdrops.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Item Pickup
    case 'itemPickup':
      require "cases/itempickups.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Hoe Plowing
    case 'worldPlow':
      require "cases/worldplow.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Fertilising
    case 'worldFertilising':
      require "cases/worldfertilising.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Taming
    case 'animalTaming':
      require "cases/animaltaming.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Brewing
    case 'usedBrewing':
      require "cases/usedbrewing.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Fireworks
    case 'usedFireworks':
      require "cases/usedfireworks.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Music Discs
    case 'usedMusic':
      require "cases/usedmusic.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Ender Pearl
    case 'usedPearls':
      require "cases/usedpearls.php";
      header("Location: $systemRedirect");
      break;

    // Generador de logros para tipo: Smelting
    case 'usedFurnance':
      require "cases/usedfurnance.php";
      header("Location: $systemRedirect");
      break;

  // En caso de que ocurra un error, vamos a imprimir éste mensaje en la pantalla y no se hará ningún cambio a ningún archivo
  default:
    printf("Ocurrió un error al localizar el tipo de logro");
    break;

}


// En caso de que no se haya completado el formulario, éste mensaje será impreso en pantalla como error, sin realizar cambios a los archivos
} else {

  printf("No se han encontrado datos en la variable post");

}
?>
