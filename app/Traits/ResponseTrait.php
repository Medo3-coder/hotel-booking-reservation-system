<?php
namespace App\Traits;

trait ResponseTrait {
    /**
     * keys : success, fail, needActive, waitingApprove, unauthenticated, blocked, exception
     */

    public function response($key, $message, $data = [], $anotherKey = [], $page = []) {

        $allResponse['key']     = (string) $key;
        $allResponse['message'] = (string) $message;

        # unread notifications count if request ask
        if ($key == 'success' && request()->has('count_notifications')) {
            $count = 0;
            if (auth()->check()) {
                $count = auth()->user()->notifications()->unread()->count();
            }

            $allResponse['count_notifications'] = $count;
        }

        # additional data
        if (!empty($anotherKey)) {
            foreach ($anotherKey as $otherKeys => $value) {
                $allResponse[$otherKeys] = $value;
            }
        }

        # res data
        if ($data = ![] && (in_array($key, ['success', 'needActive', 'exception']))) {
            $allResponse['data'] = $data;
        }

    }

    public function unauthenticatedReturn() {
        return $this->response('unauthorized', 'Please login again');
    }

    public function successOtherData(array $dataArr) {
        return $this->response('success', trans('apis.success'), [], $dataArr);
    }

}
