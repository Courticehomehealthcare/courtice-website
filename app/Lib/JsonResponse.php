<?php 

namespace App\Lib;

use Illuminate\Support\Facades\Response;

class JsonResponse
{
    /**
     * To create response based on the result
     * 
     * @param array $data
     * @param bool $status
     * @param int $errorCode
     * @param string $message
     * @param string $error
     * @param string $links
     */
    public function createResponse(
        $data, 
        $status,         
        $message,
        $errorCode, 
        $error = [],
        $links = []
    ) {
        return response()->json(
            [
                'status' => $status,
                'message' => $message,
                'data' => $data,
                'error' => $error,
                '_links' => $links
            ], $errorCode);
    }
    
}

?>