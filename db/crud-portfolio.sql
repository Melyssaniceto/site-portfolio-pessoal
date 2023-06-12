-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Jun-2023 às 16:34
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crud-portfolio`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `conteudo` varchar(500) NOT NULL,
  `imagem` varchar(2048) NOT NULL,
  `obra` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `data`, `conteudo`, `imagem`, `obra`, `local`) VALUES
(2, 'melyssaa', '2023-06-08', 'lkjhgfdzxcvbnm,', 'https://www.google.com/search?q=van+gogh&rlz=1C1GCEU_pt-BRBR1042BR1043&oq=van+&aqs=chrome.0.35i39i650j46i433i512j69i57j46i433i512j46i340i433i512l3j69i60.2215j0j7&sourceid=chrome&ie=UTF-8#imgrc=1emZmm6Inf--BM', 'lkjhgfdszç´lç.', 'zxcvb'),
(4, 'melyssaaa', '2023-06-30', 'qwertyjk', 'https://www.google.com/search?q=van+gogh&rlz=1C1GCEU_pt-BRBR1042BR1043&oq=van+&aqs=chrome.0.35i39i650j46i433i512j69i57j46i433i512j46i340i433i512l3j69i60.2215j0j7&sourceid=chrome&ie=UTF-8#imgrc=1emZmm6Inf--BM', 'mnbvcxz', 'fghujiop'),
(5, 'melyssakjh', '2023-04-05', 'dfjj ejfçsovjsr´g afhapo', 'https://www.google.com/search?rlz=1C1GCEU_pt-BRBR1042BR1043&sxsrf=APwXEdf7g4UcBj0cL4cLvIbB0JcN1n_Fnw:1686575779676&q=van+gogh&tbm=isch&sa=X&ved=2ahUKEwi0ye-x6L3_AhUDqpUCHcZNBIsQ0pQJegQIDBAB&biw=1536&bih=754&dpr=1.25#imgrc=EZPeTvqNsxaHRM', 'kjhgfdsdfghjiop', '[´poiuytyuiop'),
(6, 'kjhgf', '1234-03-12', 'qwasdfgertyjk', 'https://www.google.com/search?rlz=1C1GCEU_pt-BRBR1042BR1043&sxsrf=APwXEdf7g4UcBj0cL4cLvIbB0JcN1n_Fnw:1686575779676&q=van+gogh&tbm=isch&sa=X&ved=2ahUKEwi0ye-x6L3_AhUDqpUCHcZNBIsQ0pQJegQIDBAB&biw=1536&bih=754&dpr=1.25#imgrc=EZPeTvqNsxaHRM', 'lkjhgfdsa', 'asxdfghjkl');

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolio`
--

CREATE TABLE `portfolio` (
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `cpf` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `portfolio`
--

INSERT INTO `portfolio` (`nome`, `email`, `data`, `cpf`, `endereco`, `telefone`, `id`) VALUES
('melyssaa', 'anicetomelyssa@gmail.com', '2023-06-15', '3456784567', 'rua asdfghjkl', '40028922', 1),
('melyssaa', 'melyssa.aniceto@portalsesisp.org.br', '2023-03-29', '3456784567', 'kjhgffghjkloihgf', '4002892', 2),
('melyssa', 'melyssa.aniceto@portalsesisp.org.br', '2022-08-17', '3456784567', 'kjhgffghjkloihgf', '40028922', 3),
('melyssakjh', 'anicetomelyssa@gmail.com', '2022-12-14', '3456784567', 'kjhgffghjkloihgf', 'https://www.google.com/search?q=van+gogh&rlz=1C1GCEU_pt-BRBR1042BR1043&oq=van+gogh&aqs=chrome.0.0i355i433i512j46i433i512j0i512j0i433i512l2j0i433i650j0i131i433i512j0i433i650l2j0i512.1760j0j7&sourceid=chrome&ie=UTF-8#imgrc=1emZmm6Inf--BM', 4),
('melyssakjh', 'yondaime.mntt@gmail.com', '2023-06-24', '3456784567', 'rua asdfghjkl', '4002892', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
