    <?php


    use App\Http\Controllers\Controller;
    use App\Models\Setting;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Validator;
    use Symfony\Component\VarDumper\VarDumper;
    use Illuminate\Support\Str;

    class SettingController extends Controller
    {
        public function update(Request $request)
        {
            /* Setting::create($request->all());
            dd($request->all()); */
            $data = [
                'image' => 'require|image|mimes:png,jpg,jpeg,gif,svg|max:2048',
                'facebook' => 'nullable|string',
                'instagram' => 'nullable|string',
                'phone' => 'nullable|numeric',
                'email' => 'nullable|email',
            ];
            foreach (config('app.languages') as $key => $value) {
                $data[$key . '*.title'] = 'nullable| string';
                $data[$key . '*.content'] = 'nullable| string';
                $data[$key . '*.address'] = 'nullable| string';
            }
            $validatedData = $request->validate($data);
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store('public/images');
            return redirect()->route('dashboard.setting');
        }
    }
    ?>
