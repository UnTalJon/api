<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Municipio>
 */
class MunicipioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $nombre = $this->faker->randomElement([
            'Acajete', 'Alvarado', 'La Antigua', 'Coscomatepec', 'Coyutla', 'Chiconamel', 'Espinal', 'Jalcomulco', 'Miahuatlán', 'Omealca', 'Papantla',
            'Paso de Ovejas', 'Puente Nacional', 'Teocelo', 'Tepetlán', 'Tlapacoyan', 'Tuxpan', 'Veracruz', 'Zongolica', 'Perote'
        ]);

        $vegetacion = null;
        $fauna = null;
        $clima = null;
        $suelo = null;

        switch($nombre) {
            case 'Acajete':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque caducifolio con especie de encinos, pinos, matorrales con izotes, matorrales espinosos, oyamel, encino, liquidámbar.';
                $fauna = 'compuesta por poblaciones de armadillos, conejos, zorros, mapaches, tuzas, aves y reptiles.';
                $clima = 'Su clima generalmente es frío-húmedo con una temperatura promedio anual de 16ºc; con heladas en invierno y constantes neblinas. Su precipitación media anual está en un promedio de 1000 a 2000 milímetros.\nEn la mayor parte del territorio templado húmedo con lluvias todo el año y en minoritariamente y semifrío húmedo con abundantes lluvias en verano, con un rango de precipitación de 1400 – 1600 mm y una temperatura promedio de 10 – 18°C.';
                $suelo = 'Su suelo es de tipo ígneo extrusivo con alta susceptibilidad a la erosión. Se destina en un 65% para la actividad agrícola, 20% en vivienda, 10% en comercio y 5% en oficinas y espacios públicos.';
                break;

            case 'Alvarado':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de vegetación tipo palmar con manglares y sabanas, en forma silvestre cercén papales y cardos.';
                $fauna = 'En el municipio se desarrolla una fauna compuesta por poblaciones de mapaches, zorros, tejones, conejos, tuzas, ardillas, reptiles, peces y aves.';
                $clima = 'Su clima es cálido-regular con una temperatura promedio de 26.1 °C; su precipitación pluvial media anual es de 1 mil 748.3 mm.';
                $suelo = 'Su suelo es de tipo gleysol, se caracteriza por la acumulación y estancamiento de agua en época de lluvias, en la capa saturada de agua se observan colores azulosos o grises que al secarse presentan manchas rojas, son poco susceptibles a la erosión. Se destina la sector agropecuario.';
                break;

            case 'La Antigua':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son de dos tipos selva mediana subcaducifolia y selva baja caducifolia que se caracterizan por estar integradas por especies arbóreas de 15 a 30 metros de altura de fuste cresto con especies como chaca, cedro, Ceiba, higueras, guaje, chijol y tepame.';
                $fauna = 'En el municipio se desarrolla una fauna compuesta por poblaciones de conejos, zorros, coyotes, armadillos y mapaches; reptiles como víboras de cascabel, sabaneras y aves como calandrias, palomas moras, cotorros y torcacitas.';
                $clima = 'Su clima es cálido-regular con una temperatura promedio de 25.3 °C; su precipitación pluvial media anual es de un mil 500 mm.';
                $suelo = 'Su suelo tiene grandes variantes, entre otras clases, casi a nivel ondulado suavemente, suavemente quebrado, cerril y escarpado. Lo utilizan en un mayor porcentaje para la agricultura y la ganadería.';
                break;

            case 'Coscomatepec':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque frío con especies como el pino ocote, encino y cedro.';
                $fauna = 'Se desarrollo una fauna compuesta por poblaciones de mamíferos como el gato montés, mapaches, tejones, armadillos, zorras, conejos y tuzas; aves como halcones, gavilanes, codornices, búhos y urracas, y reptiles como culebras de agua, coralillo e iguanas.';
                $clima = 'Su clima es templado-húmedo-regular con una temperatura promedio de 19.6 °C; su precipitación pluvial media anual es de 2 mil 69.2 mm.';
                $suelo = 'Su suelo es de origen in-situ, coluvial y volcánico de profundidad somera, media y profunda, de textura franca, franco-arenosa, franco-arcillosa y arenosa.';
                break;

            case 'Coyutla':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son los de bosque subtropical perennifolio con especies como el palo sagrado, chalahuite, palo mulato, laurel y caoba.';
                $fauna = 'En el municipio se desarrolló una fauna compuesta por poblaciones de mapaches, tejones, conejos, zorrillos y aves como golondrina y calandria.';
                $clima = 'Es un municipio con un clima predominantemente cálido, con una temperatura media anual de 24º C con lluvias en verano y principalmente en otoño y algunas más en invierno. Su precipitación pluvial media anual es de 2,985.3 mm. La época seca es durante los meses de marzo a junio, siendo el mes de mayo el de las temperaturas más altas.';
                $suelo = 'Su suelo es de tipo luvisol, se caracteriza por contener acumulación de arcilla con tonalidades blancas, es susceptible a la erosión.';
                break;

            case 'Chiconamel':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son: bosque mediano o bajo subtropical perennifolia, jonote, guanacaxtle y sangreádo.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de conejo, ardillas y zorras.';
                $clima = 'Su clima es cálido-extremoso con una temperatura promedio de 20.8º C.; su precipitación pluvial media anual es de 1,404.6 milímetros.';
                $suelo = 'Su suelo es de tipo regosol y vertisol caracterizándose por no presentar capas de distintas, con grietas anchas y profundas, es susceptible a la erosión.';
                break;

            case 'Espinal':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque perennifolio con chalahuites, sangregada, laurel, cedro y jonote.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de conejos, ardillas, mapaches, aves (chachalacas, palomas, golondrinas) y reptiles (coralillo y víbora de cascabel).';
                $clima = 'Su clima es cálido-regular con una temperatura promedio de 23.8º C.; su precipitación pluvial media anual es de 1,889 milímetros.';
                $suelo = 'Su suelo es de tipo vertisol se caracteriza por no presentar capaz distintas con tonalidades claras y susceptibilidad a la erosión.';
                break;

            case 'Jalcomulco':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque mediano y bajo subtropical con palo bobo, rajador, vara dulce, chaca, guacima, espino chijal y raspillo.';
                $fauna = 'Fauna compuesta por poblaciones de armadillos, conejos, zorras, tuzas, tejones y reptiles (coralillos, víboras de cascabel y culebras negras de agua).';
                $clima = 'Su clima es cálido-regular con una temperatura promedio de 24º C.; su precipitación pluvial media anual es de 1,125 milímetros.';
                $suelo = 'Su suelo es de tipo feozem, luvisol y rendzina, el primero se caracteriza por una capa superficial oscura y rica en nutrientes y materia orgánica, el segundo, acumulación de arcilla en el subsuelo y el tercero, materia orgánica que descansa sobre roca caliza.';
                break;

            case 'Miahuatlán':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque perennifolio con encinos.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de mamíferos, aves y reptiles.';
                $clima = 'Su clima es templado-humedo-extremoso, con una temperatura anual de 14ºC; su precipitación pluvial media anual e de 1,639.7 mm.';
                $suelo = 'Su suelo es de tipo andosol, se caracteriza por haberse formado de cenizas volcánicas, es susceptible a la erosión.';
                break;

            case 'Omealca':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de vegetación subtropical perennifolio y bosque templado caducifolio.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de armadillos, tuzas, tlacuaches, conejos, aves y reptiles.';
                $clima = 'Su clima es cálido-húmedo-regular con una temperatura promedio de 21.6° C; su precipitación pluvial media anual es de 2,390 mm.';
                $suelo = 'Su suelo es de tipo feozem, se caracteriza por tener una capa superficial de materia orgánica susceptible a la erosión.';
                break;

            case 'Papantla':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque tipo subtropical perennifolio, con especies de árboles como jonote, laurel, palo mula, cedro, ceiba y algunas variedades de la familia de las leguminosas.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de armadillos, conejos, tejones, mapaches, tlacuaches, coyotes, ardillas, palomas, codornices, gavilanes; víboras de cascabel, coralillo mazacuatas y nauyacas.';
                $clima = 'Su clima es cálido-regular con una temperatura promedio de 20.8° C; su precipitación pluvial media anual es de 1,160 mm.';
                $suelo = 'Su suelo es de tipo feozem, regosol y vertisol, cuyas características principales son: su localización en zonas templadas lluviosas con selva o acidez y susceptibilidad a la erosión.';
                break;

            case 'Paso de Ovejas':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque selva baja caducifolia y vegetación secundaria con especies como cedro, ceiba, palma real, higuera, palma de coyol y chote.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de conejos, mapaches, ardillas, tuzas, venados, zorrillos, tlacuaches, comadrejas; víboras de cascabel, mazacuatas, coralillos; palomas, garzas, loros y una gran variedad de aves canoras.';
                $clima = 'Su clima es cálido-regular con una temperatura promedio de 25° C; su precipitación pluvial media anual es de 1,500 mm.';
                $suelo = 'Su suelo es de tipo cambisol y vertisol, presenta una capa de suelo de roca, lo afecta poco la erosión, el segundo presenta grietas anchas y profundas en época de sequía y poca susceptibilidad a la erosión.';
                break;

            case 'Puente Nacional':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque bajo subtropical perennifolio con guarambo, jonote, guanacaxtle y sangrado y encino.';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de ardillas, conejos, tlacuaches y zorros.';
                $clima = 'Su clima es cálido-regular con una temperatura por medio de 26.5° C; su precipitación pluvial media anual es de 979.3 mm.';
                $suelo = 'Su suelo es tipo vertisol, presenta anchas y profundas zanjas en época de sequía, son suelos duros y con tonalidades negras, grises o rojizas.';
                break;

            case 'Teocelo':
                $vegetacion = 'Su vegetación es de tipo bosque bajo tropical perennifolio, con especies como el guarumbo y el jonote.';
                $fauna = 'Existen en el municipio una gran variedad de animales silvestres.';
                $clima = 'Su clima es templado-húmedo-regular, con una temperatura media anual de 18.4°C, ; su precipitación pluvial media anual es de 1,797 mm.';
                $suelo = 'Su suelo es de tipo luvisol y se caracteriza por tener acumulación de arcilla en el subsuelo.';
                break;

            case 'Tepetlán':
                $vegetacion = 'Su vegetación es de tipo bosque mediano o bajo subtropical perennifolio, cuenta con especies como chancarro, jonote, guanacaxtle y sangreado.';
                $fauna = 'Existe en el municipio una gran variedad de animales silvestres.';
                $clima = 'Su clima es templado-húmedo, con una temperatura media anual de 19°C, su precipitación pluvial media anual es de 1,320 mm.';
                $suelo = 'Su suelo es de tipo andasol, se caracteriza por haberse formado a partir de cenizas volcánicas.';
                break;

            case 'Tlapacoyan':
                $vegetacion = 'Su vegetación es de tipo bosque subtropical perennifolio.';
                $fauna = 'Tiene una extensa fauna en la que se encuentran animales tales como el Martarín, cojolite, pico de canoa, guincho, candil, miagua, quitapil, yanza, voladora, víbora verde, moyocuil, roncador.';
                $clima = 'Su clima es cálido-húmedo-regular con una temperatura promedio de 18°C; su precipitación pluvial media anual es de 1500mm.';
                $suelo = 'Su suelo es de tipo luvisol, se caracteriza por la acumulación de arcilla en el subsuelo es susceptible a la erosión.';
                break;

            case 'Tuxpan':
                $vegetacion = 'La vegetación del municipio es de tipo bosque alto tropical, perennifolio. Se encuentran árboles como el encino, el fresno, sauce, álamo y predomina el chicozapote y la caoba. En estas regiones se localizaron las explotaciones de caoba y chicle.';
                $fauna = 'En el municipio existen una gran variedad de animales silvestres, entre los que se encuentran el conejo, armadillo, mapache, tejón, onza y codorniz; víbora de : coralillo, mazacuate, cuatro narices, voladora y chuirrionera así como una gran variedad de insectos.';
                $clima = 'Su clima es tropical, con una temperatura media anual de 24.1°C; con lluvias abundantes dado que su precipitación pluvial media anual es de 1,241 milímetros.';
                $suelo = 'Su suelo es de tipo feozem, gleysol, regosol y vertisol, el primero tiene una capa superficial oscura, suave y rica en materia orgánica, el segundo presenta colores azulosos, verdosos o grises, el tercero se caracteriza por no presentar capas distintas y ser claros, y el último presenta grietas anchas y profundas en época de sequías.';
                break;

            case 'Veracruz':
                $vegetacion = 'Su vegetación es de tipo selva baja caducifolia, constituida por árboles que pierden sus hojas durante la época invernal y se encuentran árboles como el liquidámbar y el ocote.';
                $fauna = 'Hay una gran variedad de animales silvestres, entre los que se encuentran principalmente la garza, gaviota, conejo, tlacuache, ardilla, jaguar, tuza y Manatíes entre otros, además de una gran variedad de insectos.';
                $clima = 'El clima es tropical cálido, con una temperatura media anual de 25.3 °C y precipitación media anual de 1500 mm.';
                $suelo = 'Los tipos de suelo del municipio son feozem y luvisol. El primero tiene una capa superficial rico en materia orgánica y nutrientes, susceptible a la erosión. El segundo acumula arcilla en el subsuelo, también es susceptible a la erosión.';
                break;

            case 'Zongolica':
                $vegetacion = 'Su vegetación es de tipo bosque alto perennifolio y bosque tropical caducifolio y cuenta con especies como: cedro, palo mulato y guarumbo.';
                $fauna = 'El municipio cuenta con una gran variedad de animales silvestres, entre los que se encuentran: temazate, tepescuincle, conejo, tejón, mapache, ardilla, zorro, tlacuache, aves, peces y una gran variedad de insectos.';
                $clima = 'Su clima es templado-húmedo-extremoso con una temperatura promedio de 17.4°C; su precipitación pluvial media anual es de 2,270.1 mm.';
                $suelo = 'Su suelo es de tipo bosque alto perennifolio.';
                break;

            case 'Perote':
                $vegetacion = 'Los ecosistemas que coexisten en el municipio son el de bosque de tipo asiculipolis pináceas y crasiro-sulifolio, con especies de pino, encino, matorrales, isotes y matorrales espinosos';
                $fauna = 'Se desarrolla una fauna compuesta por poblaciones de conejos, zorros, gato montes, mapache, armadillos, tlacuaches, gavilanes y palomas y lechuzas.';
                $clima = 'Su clima es frío-seco-regular con una temperatura promedio de 12° C; su precipitación pluvial media anual es de 493.6 mm.';
                $suelo = 'El tipo de suelo es regosol, es muy susceptible a la erosión, su textura es franca o franca arcillosa.';
                break;
            
            default:
                $vegetacion = null;
                $fauna = null;
                $clima = null;
                $suelo = null;
                break;
        }

        return [
            'schedule_id' => Schedule::factory(),
            'nombre' => $nombre,
            'vegetacion' => $vegetacion,
            'fauna' => $fauna,
            'clima' => $clima,
            'tipo_de_suelo' => $suelo,
            'particularidades' => $this->faker->paragraph(5)
        ];
    }
}
