class Product
{
    /**
     * @var string $name Название продукта
     */
    private $name;

    /**
     * @var float $calories Калории в 100 граммах продукта
     */
    private $calories;

    /**
     * @var float $fat Жиры в 100 граммах продукта
     */
    private $fat;

    /**
     * @var float $carbohydrates Углеводы в 100 граммах продукта
     */
    private $carbohydrates;

    /**
     * @var float $protein Белки в 100 граммах продукта
     */
    private $protein;

    /**
     * Конструктор класса
     *
     * @param string $name Название продукта
     * @param float $calories Калории в 100 граммах продукта
     * @param float $fat Жиры в 100 граммах продукта
     * @param float $carbohydrates Углеводы в 100 граммах

class ProductRepository
{
    /**
     * @var array $products Список продуктов
     */
    private $products;

    /**
     * Добавляет продукт в список
     *
     * @param Product $product Продукт
     *
     * @return void
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    /**
     * Возвращает список всех продуктов
     *
     * @return array
     */
    public function getAllProducts()
    {
        return $this->products;
    }
}


