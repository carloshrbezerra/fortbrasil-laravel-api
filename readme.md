## Model
```
class Estabelecimento extends Model
{
    protected $table = 'estabelecimento';
    protected $fillable = array(
        "ativo",
        "localizacao",
		"data_abertura",
		"email",
		"nome",
		"nome_fantasia",
		"telefone",
		"atividade"
	);
}
```


## Controller

class EstabelecimentoController extends Controller
{
    private $estabelecimento;

    public function __construct(Estabelecimento $estabelecimento)
    {
        $this->estabelecimento = $estabelecimento;
    }


    public function index(Request $request)
    {
        $size = $request->query('size', 10);
        $estabelecimentos = Estabelecimento::paginate($size);

        return EstabelecimentoResource::collection($estabelecimentos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            $data = $request->all();
            $estabelecimento = $this->estabelecimento->create($data);
            DB::commit();
            return new EstabelecimentoResource($estabelecimento);
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estabelecimento $estabelecimento)
    {
        return new EstabelecimentoResource($estabelecimento);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();

            $estabelecimento->fill($request->all());
            $estabelecimento->save();

            DB::commit();
            return new EstabelecimentoResource($estabelecimento);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estabelecimento = $this->empresa->findOrFail($id);
        $estabelecimento->delete();

        return new EstabelecimentoResource($estabelecimento);
    }

    public function findByLocalizacao($localizacao)
    {
        return $this->estabelecimento->where('localizacao', $localizacao)->get();
    }
}
