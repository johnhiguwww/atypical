-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Abr-2022 às 15:54
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atypical`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `crianca`
--

CREATE TABLE `crianca` (
  `id_crianca` int(11) NOT NULL,
  `nome_crianca` varchar(100) DEFAULT NULL,
  `email_crianca` varchar(50) DEFAULT NULL,
  `senha_crianca` varchar(15) DEFAULT NULL,
  `confimar_senha` varchar(15) DEFAULT NULL,
  `autismo` text DEFAULT NULL,
  `sindrome_de_down` text DEFAULT NULL,
  `microcefalia` text DEFAULT NULL,
  `autismo_sindrome` text DEFAULT NULL,
  `autismo_microcefalia` text DEFAULT NULL,
  `genero_fem` text DEFAULT NULL,
  `genero_masc` text DEFAULT NULL,
  `genero_outros` text DEFAULT NULL,
  `data_nas` date NOT NULL,
  `comportamentos_inadequados` tinyint(1) DEFAULT NULL,
  `interacao_social` tinyint(1) DEFAULT NULL,
  `esteriotipia` tinyint(1) DEFAULT NULL,
  `comunica_verbalmente` tinyint(1) DEFAULT NULL,
  `links_hiperfoco` varchar(2100) DEFAULT NULL,
  `links_hiperfoco2` varchar(2100) DEFAULT NULL,
  `links_hiperfoco3` varchar(2100) DEFAULT NULL,
  `motora_fina` tinyint(1) DEFAULT NULL,
  `motora_grossa` tinyint(1) DEFAULT NULL,
  `firmou_cabeca` float DEFAULT NULL,
  `sentou_apoio` float DEFAULT NULL,
  `engatinhou` tinyint(1) DEFAULT NULL,
  `andou_anos` float DEFAULT NULL,
  `tropeca_andar` tinyint(1) DEFAULT NULL,
  `escada _alternado` tinyint(1) DEFAULT NULL,
  `linha_reta` tinyint(1) DEFAULT NULL,
  `pula_pe_so` tinyint(1) DEFAULT NULL,
  `dificuldade_aprendizagem` tinyint(1) DEFAULT NULL,
  `materias_escolares` varchar(200) DEFAULT NULL,
  `tdh` tinyint(1) DEFAULT NULL,
  `prenatal` tinyint(1) DEFAULT NULL,
  `dores_parto` float DEFAULT NULL,
  `doenca_gestacao` tinyint(1) DEFAULT NULL,
  `gestacao_risco` tinyint(1) DEFAULT NULL,
  `gestacao_medicamento` tinyint(1) DEFAULT NULL,
  `crianca_nascimento` tinyint(1) DEFAULT NULL,
  `demostra_carinho` tinyint(1) DEFAULT NULL,
  `carinho_pessoa` varchar(100) DEFAULT NULL,
  `interesses_crianca` tinyint(1) DEFAULT NULL,
  `brinca_sozinha` tinyint(1) DEFAULT NULL,
  `brinca_outras_crianca` tinyint(1) DEFAULT NULL,
  `descricao_socializacao` varchar(500) DEFAULT NULL,
  `compartilha_objeto` tinyint(1) DEFAULT NULL,
  `identifica_sentimentos` tinyint(1) DEFAULT NULL,
  `demostra_empatia` tinyint(1) DEFAULT NULL,
  `comportamentos_frustracoes` varchar(100) DEFAULT NULL,
  `sialorreia` tinyint(1) DEFAULT NULL,
  `tosse_engasgo_alimentacao` tinyint(1) DEFAULT NULL,
  `dificuldade_comunicacao` tinyint(1) DEFAULT NULL,
  `alimentacao_consistencia` tinyint(1) DEFAULT NULL,
  `ecolalias_tardias_imediatas` tinyint(1) DEFAULT NULL,
  `contato_ocular_pessoas` tinyint(1) DEFAULT NULL,
  `demora_de_fala` tinyint(1) DEFAULT NULL,
  `dificuldade_de_brinca` tinyint(1) DEFAULT NULL,
  `dificuldade_de_brinca_com_pessoas` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `terapeuta`
--

CREATE TABLE `terapeuta` (
  `id_terapeuta` int(11) NOT NULL,
  `nome_terapeuta` varchar(50) NOT NULL,
  `email_terapeuta` varchar(50) NOT NULL,
  `senha_terapeuta` varchar(15) NOT NULL,
  `confirmar_senha_to` varchar(15) NOT NULL,
  `genero_masculino_to` tinyint(1) NOT NULL,
  `genero_feminino_to` tinyint(1) NOT NULL,
  `genero_outros_to` tinyint(1) NOT NULL,
  `data_nascimento_to` date NOT NULL,
  `formacao` varchar(50) NOT NULL,
  `registro_medico` varchar(50) NOT NULL,
  `tempo_experiencia` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `crianca`
--
ALTER TABLE `crianca`
  ADD PRIMARY KEY (`id_crianca`);

--
-- Índices para tabela `terapeuta`
--
ALTER TABLE `terapeuta`
  ADD PRIMARY KEY (`id_terapeuta`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `crianca`
--
ALTER TABLE `crianca`
  MODIFY `id_crianca` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `terapeuta`
--
ALTER TABLE `terapeuta`
  MODIFY `id_terapeuta` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
