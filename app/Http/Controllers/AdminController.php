<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category; //wajib ada utk category
use App\Models\product; //wajib ada utk product

class AdminController extends Controller
{
    public function home()
    {
        return view('admin.home'); // Render the admin home page fix!
    }
    public function view_category()
    {
        $data = category::all();
        return view('admin.showcategory', compact('data')); //catch data from category.blade.php
    }
    public function add_category(Request $request)
    {
        // Validate the request
        $request->validate([
            'category_name' => 'required|string|max:255',
            'status' => 'required|in:visible,not visible',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new category instance
        $data = new Category();

        // Correct the input field name to 'category_name'
        $data->category_name = $request->category_name;  // Use category_name here
        $data->status = $request->status;

        // Handle file upload for image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data->image = $filename;
        }

        // Save the category to the database
        $data->save();

        // Redirect back to the add_category page with a success message
        return redirect()->back()->with('message', 'Category Added Successfully');
    }

    public function showAddCategoryPage()
    {
        return view('admin.add_category'); // Create this view for the Add Category form
    }

    public function delete_category($id)
    {
        $data = category::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Category is Deleted Successfully');
    }

    public function edit_category($id)
    {
        // Retrieve the category by ID
        $data = category::find($id);

        // Check if the category exists
        if (!$data) {
            return redirect()->route('view_category')->with('message', 'Category not found!');
        }

        // Return the edit form with the category data
        return view('admin.edit_category', compact('data'));
    }
    public function update_category(Request $request, $id)
    {
        // Validate the incoming request
        $request->validate([
            'category_name' => 'required|string|max:255',
            'status' => 'required|in:visible,not visible',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = category::find($id);

        // If category doesn't exist
        if (!$data) {
            return redirect()->route('view_category')->with('message', 'Category not found!');
        }
        // Update category details
        $data->category_name = $request->category_name;
        $data->status = $request->status;

        // Handle file upload for image if a new image is provided
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data->image = $filename;
        }

        // Save the updated category
        $data->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Category updated successfully!');

    }


    public function view_product()
    {
        $category = category::all();
        return view('admin.show_product', compact('category')); //will lead to add product page
    }

    public function add_product(Request $request)
    {
        // Validate incoming data
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'category' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle file upload
        $imagePath = $request->file('image')->store('public/products');

        // Create a new product
        $product = new Product();
        $product->title = $validated['title'];
        $product->description = $validated['description'];
        $product->price = $validated['price'];
        $product->quantity = $validated['quantity'];
        $product->category = $validated['category'];
        $product->image = $imagePath; // Save the file path to the database

        $product->save();

        // Redirect with success message
        return redirect()->back()->with('message', 'Product added successfully!');
    }
    public function showAddProductPage()
    {
        $category = category::all(); // Fetch all categories from the database
        return view('admin.add_product', compact('category')); // Pass the category data to the view
    }


    public function show_product()
    {
        $product = product::all(); //will get all data from product tables
        return view('admin.show_product', compact('product'));
    }

    public function delete_product($id)
    {
        $product = product::find($id); //to find product by id

        if ($product) {
            $product->delete();
            return redirect()->back()->with('message', 'Product Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Product Not Found');
        }
    }

    public function update_product($id)
    {
        $product = product::find($id); //to find product by id
        $category = category::all();

        return view('admin.update_product', compact('product', 'category'));
    }

    public function update_product_confirm(Request $request, $id)
    {
        $product = product::find($id);

        $product->title = $request->title;
        $product->description = $request->description;
        $product->category = $request->category;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $image = $request->image;


        if ($image) {

            $imagename = time() . '.' . $image->getClientOriginalExtension();

            $request->image->move('product', $imagename);
            $product->image = $imagename;
        }


        $product->save();

        return redirect()->back()->with('message', 'Product Updated Successfully');
    }
}
