-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 02-01-2020 a las 12:54:50
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `conalpedis_centralizado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociaciones_proyectos`
--

CREATE TABLE `asociaciones_proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish2_ci NOT NULL,
  `area` text COLLATE utf8_spanish2_ci NOT NULL,
  `entidad_proponente` text COLLATE utf8_spanish2_ci NOT NULL,
  `fuente_financiamiento` text COLLATE utf8_spanish2_ci NOT NULL,
  `duracion` text COLLATE utf8_spanish2_ci NOT NULL,
  `lugar_ejecucion` text COLLATE utf8_spanish2_ci NOT NULL,
  `poblacion_beneficiada` text COLLATE utf8_spanish2_ci NOT NULL,
  `contraparte` text COLLATE utf8_spanish2_ci NOT NULL,
  `estado` text COLLATE utf8_spanish2_ci NOT NULL,
  `objetivo` text COLLATE utf8_spanish2_ci NOT NULL,
  `resultados` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_asociacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `asociaciones_proyectos`
--

INSERT INTO `asociaciones_proyectos` (`id_proyecto`, `nombre`, `area`, `entidad_proponente`, `fuente_financiamiento`, `duracion`, `lugar_ejecucion`, `poblacion_beneficiada`, `contraparte`, `estado`, `objetivo`, `resultados`, `id_asociacion`) VALUES
(1, 'Fortalecimiento Organizacional', 'Educación social', 'Ashico-Proyecto “Kallpachay”', 'Bs 35,339.62', '3 años (2017-2019)\r\n', 'La Paz\r\n', 'Personas con discapacidad-Hipoacúsicos', 'Ambiente, trabajo voluntario, pasaporte para los voluntarios hipoacúsicos.', 'El proyecto se finalizará esté año 2019', 'Mejor reconocimiento y cumplimiento de los derechos de las personas hipoacúsicas y sus organizaciones de La Paz.', 'Conocimiento sobre trabajo en equipo de la mesa directiva, ser un líder empoderado para defender los derechos de las personas con hipoacusia como personas con discapacidad auditiva con una autoestima alta. ', 1),
(2, 'Fortalecimiento Organizacional', 'Educación social', 'Fundación Abilis', 'Euro 2,257', 'Octubre de 2017 a diciembre de 2017 (3 meses)', 'La Paz', 'Personas con discapacidad-Hipoacúsicos', 'Ambiente, trabajo voluntario, pasaporte para los voluntarios hipoacúsicos.', 'Se terminó en el año 2017', '1. Promover el desarrollo de los miembros de la asociación, mejorando la interacción entre los mismos, así como los resultados de equipo\r\nResultados: En el desarrollo del primer taller se logró una cohesión de grupo donde cada uno de los miembros interactuó uno con el otro permitiendo así estrechar la relación considerando además que las técnicas usadas en el taller permitieron expresar los sentimientos sintiéndose más identificados el uno con el otro y con la Asociación.\r\n\r\n2. Desarrollar en los miembros de la Asociación la capacidad de planteamiento de proyectos personales y de grupo\r\nResultados: La ejecución del segundo taller permitió identificar una debilidad en los participantes lo que queda como una tarea a futuro; al identificar que algunos miembros sentían no tener proyectos de vida personal ya que existía una baja autoestima lo que lleva a no plantearse planes de vida a futuro, razón por lo que la facilitadora dio énfasis en este tema que es Baja Autoestima, no obstante se logró unificar una proyección como grupo.\r\n\r\n3. Desarrollar en los miembros de la asociación la capacidad de Elaboración de Proyectos y Planes de Trabajo\r\nResultados: para el logro de este objetivo se planteó realizar el Tercer taller donde se observó que los participantes logran identificar las necesidades y dificultades que llevan a plantear proyectos determinando, además las actividades que requieren realizar para superar y plantear\r\nDe manera más práctica este objetivo se cumplió en el 5to Taller donde se desarrolló una Jornada de Trabajo planteando concretamente 3 Proyectos y un cronograma de trabajo para la gestión 2018.\r\n\r\n4. Conocer las Normativas y Leyes que amparan a las personas con Discapacidad para defender nuestros derechos y plantear proyectos bajo un marco legal\r\nResultados: Con la ejecución del cuarto taller se logró el cumplimiento de este objetivo de manera exitosa, ya que cada uno de los miembros expreso la necesidad de defender sus derechos y plantear acciones conjuntas como asociación como única vía de trascender ante la sociedad y autoridades.', 'El desarrollo de los talleres permitieron a los participantes expresar sus sentimientos y deseos futuros, creando una conciencia de que los hipoacúsicos son invisibles ante la sociedad boliviana, que por esa razón muchas veces no son respetados nuestros derechos, confundidos muchas veces con las personas sordas, que la sociedad no conoce nuestras necesidades para poder relacionarnos y comunicarnos con ellos, este hecho hizo que cada uno de los participantes se sientan comprometidos y con muchas responsabilidades sobre ellos para dar a conocer que es la Hipoacusia y que necesidades tenemos y sobre todo trabajar de manera conjunta como asociación para informar sensibilizar y prevenir.', 1),
(3, 'Capacitación facilitadores hipoacúsicos y su incidencia y sensibilización a la población “Hipoacúsico Hablando de Hipoacusia”', 'Educación social', 'Fundación Abilis', 'Euro 8,049', 'Julio de 2018 a Abril de 2019 (11 meses)', 'La Paz', 'Personas con discapacidad-Hipoacúsicos', 'Ambiente, trabajo voluntario, pasaporte para los voluntarios hipoacúsicos.', 'Se terminó en abril de 2019', 'GENERAL:\r\nCapacitar a Hipoacúsicos como facilitadores través de un proceso de enseñanza - aprendizaje para su incidencia y sensibilización a la población a fin de mejorar la calidad de vida.\r\n\r\nOBJETIVOS ESPECÍFICOS:\r\n- Desarrollar la Autoestima de los Hipoacúsicos para que puedan identificar sus sentimientos positivos o negativos acerca de sí mismos y de su propio valor. Desarrollar el Empoderamiento en los Hipoacúsicos para la toma de conciencia de sus posibilidades, aumentar la capacidad de decisión y ganar confianza en sí mismo. Fortalecer la identidad Hipoacúsica para crear un sentido de pertenencia a un determinado grupo tomando conciencia y control sobre sus decisiones y con ello transformando su propio rol en la sociedad. Capacitar a Facilitadores Hipoacúsicos con conocimientos necesarios para desarrollar talleres sobre los conocimientos adquiridos a grupos organizados. Elaborar materiales de difusión sobre la Hipoacusia para informar y sensibilizar. Desarrollar talleres y sesiones informativas como réplicas de lo aprendido para transmitir información precisa y necesaria sobre la hipoacusia y las necesidades de las personas que presentan discapacidad auditiva a grupos organizados, instituciones públicas y privadas. Difundir por medios masivos televisivos, radiales y Redes Sociales además de las nuevas tecnologías sobre la Hipoacusia e incidir en la población en general. Sistematizar la experiencia vivida sobre la implementación del proyecto para generar material escrito que sirva en los procesos de enseñanza de nuevas experiencias.\r\n', '- Empoderamiento de la hipoacusia.\r\n- Conocerse más así mismo como persona con discapacidad auditiva hipoacusia.\r\n- Muchos miembros perdieron el miedo de salir a difundir sobre la hipoacusia.\r\n- Personas indirectas empiezan la réplica sobre hipoacusia gracias al taller y sesiones informativas que hemos implementado del proyecto “Hipoacúsicos Hablando de Hipoacusia”.\r\n- Fortalecimiento organizacional de la Asociación de Hipoacúsicos de La Paz.\r\n- Nuevos líderes hipoacúsicos.\r\n- Más hipoacúsicos para ingresar a la asociación.\r\n- En el retiro ayudó a encontrar la identidad de hipoacusia.', 1),
(4, '“Emprendedores hipoacúsicos que luchan contra la adversidad”\r\n', 'Educación social', 'Fundación Abilis', 'Euro 3,500', 'Julio 2019 a Septiembre 2019  (3 meses)', 'La Paz', 'Personas con discapacidad-Hipoacúsicos', 'Ambiente, trabajo voluntario, pasaporte para los voluntarios hipoacúsicos.', 'Se terminó las actividades de este año 2019, pero falta comprar algunos materiales.', 'OBJETIVO GENERAL:\r\nPromover el desarrollo humano local, integrado y sostenible de las personas hipoacúsicas en la ciudad de La Paz, para reducir la pobreza y vivir bien.\r\nOBJETIVOS ESPECÍFICOS:\r\n\r\n- Capacitar a futuros emprendedores para la creación de una propia empresa de la asociación.\r\n\r\n- Ejercer su profesión o que muestran su capacidad laboral para poder conseguir y vivir dignamente en nuestro país.\r\n\r\n- Luchar contra la adversidad enseñando a la población boliviana que son capaces de trabajar en cualquier lugar.\r\n\r\n- Aprender a trabajar en equipo de un negocio de la asociación de manera satisfactoria.\r\n\r\n- Abrir y crear un negocio de la AHLP \r\npastelería a pedido en la ciudad de La Paz.\r\n\r\n- Generar trabajos para las personas con discapacidad auditiva\r\n', '- Se pudo alcanzar nuestro objetivo mencionado que es importante ser emprendedores con una mente positiva. Lograron aprender más de pastelería de forma práctica.\r\n\r\n- Aprender a trabajar en equipo de pastelería. \r\n\r\n- Empezar a ejercer su profesión como artes plásticas que se relaciona con el fondant de torta, también la crema. También contabilidad que se cuenta los precios de gastos de pastelería y ver el ahorro de ganancia. Comunicación Social que se relaciona de publicación para vender pasteles, tortas, masas saladas.\r\n\r\n- Los beneficiarios con la mente de luchar contra la adversidad enseñando a la población boliviana que son capaces de trabajar.\r\n\r\n- Logros de obtener materiales como refrigerador, cocina, batidoras, uniforme para poder trabajar de verdad.', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociaciones_proyectos`
--
ALTER TABLE `asociaciones_proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociaciones_proyectos`
--
ALTER TABLE `asociaciones_proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
