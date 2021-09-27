<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RequestPost;
use Illuminate\Http\Request;
use App\Models\Post;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    
    public function index(Request $request)
    {   
        try {
            $query = Post::query();
            $column= $request->column ?? 'id';
            $sort = $request->sort ?? 'asc';
            $query->orderBy($column,$sort);

            $limit = $request->get('limit') ?? 10;
            $postspaginate = $query->paginate($limit);
            return response()->json([
                'status' => Response::HTTP_OK,
                'posts' => $postspaginate->items(),
                'meta' => [
                    'total' => $postspaginate->total(),
                    'perPage' => $postspaginate->perPage(),
                    'currentPage' => $postspaginate->currentPage(),
                ],
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' =>$e->getMessage(),
            ]);
        }
    }

    
    public function store(RequestPost $request)
    {
        try {
            $post = Post::create(['title'=>$request->title,'content'=>$request->content]);
            return response()->json([
                'status' => Response::HTTP_OK,
                'posts' => $post,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' =>$e->getMessage(),
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        try {
            return response()->json([
                'status' => Response::HTTP_OK,
                'posts' => $post,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' =>$e->getMessage(),
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestPost $request, Post $post)
    {
        try {
            $post->update(['title'=>$request->title,'content'=>$request->content]);
            return response()->json([
                'status' => Response::HTTP_OK,
                'posts' => $post,
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' =>$e->getMessage(),
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        try {
            $post->delete();
            return response()->json([
                'status' => Response::HTTP_OK
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => Response::HTTP_INTERNAL_SERVER_ERROR,
                'message' =>$e->getMessage(),
            ]);
        }
    }
}
