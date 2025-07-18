namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;

class CartController extends Controller
{
    public function add(Request $request, $id) {
        $product = Product::findOrFail($id);
        Cart::create([
            'product_id' => $product->id,
            'quantity' => 1
        ]);
        return redirect('/cart');
    }

    public function show() {
        $items = Cart::with('product')->get();
        return view('cart', compact('items'));
    }
}
