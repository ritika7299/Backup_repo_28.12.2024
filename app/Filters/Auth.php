<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class Auth implements FilterInterface
{

    public function before(RequestInterface $request, $arguments = null)
    {
        // Check if the user is logged in
        if (!session()->get('isLoggedIn')) {
            // Redirect to login page if not logged in
            return redirect()->to('/login');
        }

        // Check user role if provided as an argument
        if ($arguments && isset($arguments[0])) {
            $role = $arguments[0];  // Get role from filter argument
            // You can use the role for further checks, for example:
            $userRole = session()->get('role');  // Assuming user role is stored in the session

            if ($userRole !== $role) {
                // Redirect to access denied page if roles do not match
                return redirect()->to('/access-denied');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Log response details or any other operations after the request is processed
        log_message('info', 'Response Status: ' . $response->getStatusCode());
    }


}