<?php namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class MapController extends Controller
{
    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function map()
    {
        $data = [
            [
                'latitude'  => '51.501527',
                'longitude' => '-0.1921837',
            ],
            [
                'latitude'  => '51.505874',
                'longitude' => '-0.1838486',
            ],
            [
                'latitude'  => '51.4998973',
                'longitude' => '-0.202432',
            ],
        ];

        return $this->responseFactory->json($data);
    }
}
