<?php
// Importer la classe CurlFileuse \CurlFile

// Vérifier si un fichier a été téléchargé
if(isset($_FILES['fichierCode']) && $_FILES['fichierCode']['error'] === UPLOAD_ERR_OK) {
    $tempFilePath = $_FILES['fichierCode']['tmp_name'];
    $fileName = $_FILES['fichierCode']['name'];

    // Appeler l'API de CodeClimate pour l'analyse du code
    // Remplacez <CODECLIMATE_API_KEY> par votre clé d'API CodeClimate
    $codeClimateAPIKey = 'f302ab7b2a28ea54b2eacd7f0930c62100c4b37c';

    // Construire la requête API
    $url = 'https://api.codeclimate.com/v1/analyzers';
    $data = array('engine' => 'codeclimate-eslint', 'branch' => 'master');
    $headers = array(
        'Content-Type: multipart/form-data',
        'Authorization: Token token=' . $codeClimateAPIKey
    );

    // Ajouter le fichier au corps de la requête
    $data['file'] = new \CurlFile($tempFilePath, mime_content_type($tempFilePath), $fileName);

    // Initialiser la requête cURL
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Exécuter la requête cURL et récupérer la réponse
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    var_dump($ch);
    // Fermer la requête cURL
    curl_close($ch);
    die();

    // Vérifier la réponse de l'API CodeClimate
    if ($httpCode == 201) {
        // Succès de l'analyse, récupérer l'URL du rapport
        $reportURL = json_decode($response)->{'data'}->{'links'}->{'self'};

        // Retourner une réponse JSON avec l'URL du rapport
        $responseData = array('reportURL' => $reportURL);
        echo json_encode($responseData);
    } else {
        // Erreur lors de l'analyse
        http_response_code(500);
        echo "Une erreur s'est produite lors de l'analyse du code.";
    }
} else {
    // Aucun fichier téléchargé ou erreur de téléchargement
    http_response_code(400);
    echo "Veuillez sélectionner un fichier à analyser.";
}
die();
?>
