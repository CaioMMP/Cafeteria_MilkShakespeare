-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: livrariatcc
-- ------------------------------------------------------
-- Server version	8.0.29

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `livros`
--

DROP TABLE IF EXISTS `livros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `livros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `genero` varchar(45) NOT NULL,
  `autor` varchar(45) NOT NULL,
  `ano` year NOT NULL,
  `paginas` int NOT NULL,
  `img` varchar(150) DEFAULT NULL,
  `salvo` bit(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livros`
--

LOCK TABLES `livros` WRITE;
/*!40000 ALTER TABLE `livros` DISABLE KEYS */;
INSERT INTO `livros` VALUES (1,'O Silmarillion','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',1977,496,'OSilmarillion.jpg',_binary '\0'),(2,'O Hobbit','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',1937,336,'OHobbit.jpg',_binary '\0'),(3,'Beren e Lúthien','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2017,368,'BereneLuthien.jpg',_binary '\0'),(4,'A Natureza da Terra-Média','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2021,512,'ANaturezadaTerraMedia.jpg',_binary '\0'),(5,'Contos Inacabados De Númenor E Da Terra-média','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',1980,624,'ContosInacabadosDeNumenorEDaTerramedia.jpg',_binary '\0'),(6,'Os Filhos de Húrin','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2007,288,'OsFilhosdeHurin.jpg',_binary '\0'),(7,'A Queda de Númenor: e outros contos da Segunda Era da Terra-média','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2022,423,'AQuedadeNumenoreoutroscontosdaSegundaEradaTerramedia.jpg',_binary '\0'),(8,'A Queda de Gondolin','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2018,288,'AQuedadeGondolin.jpg',_binary '\0'),(9,'Árvore e folha','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2020,176,'Arvoreefolha.jpg',_binary '\0'),(10,'J.R.R. Tolkien : Uma biografia','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',2018,384,'JRRTolkienUmabiografia.jpg',_binary '\0'),(11,'O Senhor dos Anéis: A Sociedade do Anel','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',1954,576,'OSenhordosAneisASociedadedoAnel.jpg',_binary '\0'),(12,'O Senhor dos Anéis: O retorno do rei','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',1954,528,'OSenhordosAneisOretornodorei.jpg',_binary '\0'),(13,'O Senhor dos Anéis: As duas torres','Fantasia, Ficção, Ação e Aventura','J.R.R. Tolkien',1954,464,'OSenhordosAneisAsduastorres.jpg',_binary '\0'),(14,'Mindset: A nova psicologia do sucesso','Psicologia e Autoajuda','Carol S. Dweck',2017,312,'MindsetAnovapsicologiadosucesso.jpg',_binary '\0'),(15,'O homem mais rico da Babilônia','Economia e Finanças','George S. Clason',2017,160,'OhomemmaisricodaBabilonia.jpg',_binary '\0'),(16,'Mais esperto que o Diabo: O mistério revelado da liberdade e do sucesso','Economia, Sociologia Política e Ciências Soci','Napoleon Hill',2014,208,'MaisespertoqueoDiabo.jpg',_binary '\0'),(17,'A Arte de ter Razão: 38 Estratégias para Vencer Qualquer Debate','Desenvolvimento e Lingu´stica','Arthur Schopenhauer',2019,80,'AArtedeterRazao.jpg',_binary '\0'),(18,'38 estratégias para vencer qualquer debate','Filosofia Política e Ciências Sociais','Arthur Schopenhauer',2014,128,'38estrategiasparavencerqualquerdebate.jpg',_binary '\0'),(19,'Corpo fala: A linguagem silenciosa da comunicação não verbal','Linguagem Corporal, Psicologia e Neurologia','Pierre Weil e Roland Tompakow',2015,288,'Corpofala.jpg',_binary '\0'),(20,'Cosmos','Astronomia','Carl Sagan',2017,560,'Cosmos.jpg',_binary '\0'),(21,'Pálido ponto azul: Uma visão do futuro da humanidade no espaço','Física, Astronomia e Ciência Espacial','Carl Sagan',2019,336,'Palidopontoazul.jpg',_binary '\0'),(22,'Uma Breve História do Tempo','Astronomia e Cosmologia Física','Stephen Hawking',2015,256,'UmaBreveHistoriadoTempo.jpg',_binary '\0'),(23,'Breves respostas para grandes questões','Astronomia e Cosmologia Física','Stephen Hawking',2018,256,'Brevesrespostasparagrandesquestoes.jpg',_binary '\0'),(24,'Buracos Negros: Palestra da BBC Reith Lectures','Astronomia e Cosmologia Física','Stephen Hawking',2016,64,'BuracosNegros.jpg',_binary '\0'),(25,'Astrofísica para apressados','Astronomia e Astrofísica','Neil deGrasse Tyson',2020,192,'Astrofisicaparaapressados.jpg',_binary '\0'),(26,'Respostas de um astrofísico','Astronomia e Astrofísica','Neil deGrasse Tyson',2020,272,'Respostasdeumastrofisico.jpg',_binary '\0'),(27,'Origens','Astronomia e Astrofísica','Neil deGrasse Tyson',2015,384,'Origens.jpg',_binary '\0'),(28,'Pai Rico, Pai Pobre','Finanças','Robert T. Kiyosaki',2018,336,'PaiRicoPaiPobre.jpg',_binary '\0'),(29,'Do Mil ao Milhão. Sem Cortar o Cafezinho','Finanças Pessoais','Thiago Nigro',2018,192,'DoMilaoMilhaoSemCortaroCafezinho.jpg',_binary '\0'),(30,'Método Financeiro Do Primo Rico','Finanças Pessoais','Thiago Nigro',2020,208,'MetodoFinanceiroDoPrimoRico.jpg',_binary '\0'),(31,'O poder da ação','Autoajuda','Paulo Vieira',2015,256,'Opoderdaacao.jpg',_binary '\0'),(32,'A Sutil Arte de Ligar o F*da-Se: Uma Estratégia Inusitada Para Uma Vida Melhor','Motivacional Auto-Ajuda e Autoestima','Mark Manson',2017,224,'ASutilArtedeLigaroFdaSe.jpg',_binary '\0'),(33,'Como convencer alguém em 90 segundos: Crie uma primeira impressão vendedora','Psicologia e Autoajuda','Nicholas Boothman',2012,264,'Comoconvenceralguemem90segundos.jpg',_binary '\0'),(34,'O manuscrito original: As leis do triunfo e do sucesso de Napoleon Hill','Auditoria','Napoleon Hill',2017,784,'Omanuscritooriginal.jpg',_binary '\0'),(35,'Manual de persuasão do FBI','Psicologia','Jack Shafer',2020,256,'ManualdepersuasaodoFBI.jpg',_binary '\0'),(36,'O Príncipe Maquiavel','Clássicos e Política','Maquiavel',2019,130,'OPrincipeMaquiavel.jpg',_binary '\0'),(37,'O detector da verdade do FBI','Psicologia','Jack Shafer',2021,272,'OdetectordaverdadedoFBI.jpg',_binary '\0'),(38,'Novo Manual do FBI para ler a mente das pessoas','Psicologia','Robin Dreeke',2020,320,'NovoManualdoFBIparaleramentedaspessoas.jpg',_binary '\0'),(39,'As armas da persuasão: Como influenciar e não se deixar influenciar','Marketing e Psicologia','Robert B. Cialdini',2012,304,'Asarmasdapersuasao.jpg',_binary '\0'),(40,'Como fazer amigos e influenciar pessoas','Psicologia','Dale Carnegie',2019,256,'Comofazeramigoseinfluenciarpessoas.jpg',_binary '\0'),(41,'Os segredos da mente milionária: Aprenda a enriquecer mudando seus conceitos sobre o dinheiro e adot','Finanças','T. Harv Eker',2006,176,'Ossegredosdamentemilionaria.jpg',_binary '\0'),(42,'Catecismo da Igreja Católica (edição de bolso)','Religioso','Conferência Nacional dos Bispos do Brasil CNB',2002,940,'CatecismodaIgrejaCatolica.jpg',_binary '\0'),(43,'Imitação de Cristo','Religioso','Tomás de Kempis',2015,320,'ImitacaodeCristo.jpg',_binary '\0'),(44,'As 48 Leis do Poder','Filosofia e Psicologia','Robert Greene',2021,544,'As48LeisdoPoder.jpg',_binary '\0'),(45,'A arte da sedução','Filosofia e Psicologia','Robert Greene',2022,560,'Aartedaseducao.jpg',_binary '\0'),(46,'33 Estratégias de Guerra','Política','Robert Greene',2022,560,'33estrategiasdeguerra.jpg',_binary '\0'),(47,'O rei dos dividendos: A saga do filho de imigrantes pobres que se tornou o maior investidor pessoa f','Biografias Negócios e Finanças','Luiz Barsi Filho',2022,256,'Oreidosdividendos.jpg',_binary '\0'),(48,'O jeito Warren Buffett de investir: Os segredos do maior investidor do mundo','Gestão e Liderança','Robert G. Hagstrom',2019,296,'OjeitoWarrenBuffettdeinvestir.jpg',_binary '\0'),(49,'O investidor inteligente','Finanças Pessoais','Benjamin Graham',2016,672,'Oinvestidorinteligente.jpg',_binary '\0'),(50,'O Mais Importante para o Investidor: Lições de um Gênio do Mercado Financeiro','Finanças','Howard Marks',2020,208,'OMaisImportanteparaoInvestidor.jpg',_binary '\0'),(51,'A bola de neve: Warren Buffett e o negócio da vida','Biografias Negócios e Finanças Pessoais','Alice Schroeder',2008,992,'Aboladeneve.jpg',_binary '\0'),(52,'Salomão, o homem mais rico que já existiu: A sabedoria da Bíblia para uma vida plena e bem-sucedida','Vida Cristã Religião e Espiritualidade','Steven K. Scott',2019,176,'Salomaoohomemmaisricoquejaexistiu.jpg',_binary '\0'),(53,'Harry Potter e a Pedra Filosofal: 1','Literatura e Ficção','J.K. Rowling',2017,208,'HarryPottereaPedraFilosofal.jpg',_binary '\0'),(54,'Harry Potter e a Câmara Secreta: 2','Literatura e Ficção','J.K. Rowling',2017,224,'HarryPottereaCamaraSecreta.jpg',_binary '\0'),(55,'Harry Potter e o Prisioneiro de Azkaban: 3','Literatura e Ficção','J.K. Rowling',2017,288,'HarryPottereoPrisioneirodeAzkaban.jpg',_binary '\0'),(56,'Harry Potter e o Cálice de Fogo: 4','Literatura e Ficção','J.K. Rowling',2017,480,'HarryPottereoCalicedeFogo.jpg',_binary '\0'),(57,'Harry Potter e a Ordem da Fênix: 5','Literatura e Ficção','J.K. Rowling',2017,640,'HarryPottereaOrdemdaFenix.jpg',_binary '\0'),(58,'Harry Potter e o Enigma do Príncipe: 6','Literatura e Ficção','J.K. Rowling',2017,432,'HarryPottereoEnigmadoPrincipe.jpg',_binary '\0'),(59,'Harry Potter e as Relíquias da Morte: 7','Literatura e Ficção','J.K. Rowling',2017,512,'HarryPottereasReliquiasdaMorte.jpg',_binary '\0'),(60,'Dom Casmurro','Clássicos de Ficção','Machado de Assis',2019,208,'DomCasmurro.jpg',_binary '\0'),(61,'Manual de Epicteto: A arte de viver melhor','Ética, Responsabilidade Profissional, e Técni','Epicteto',2021,96,'ManualdeEpicteto.jpg',_binary '\0'),(62,'Sobre a brevidade da vida','Políticas Públicas, Política e Ciências Socia','Sêneca',2020,96,'Sobreabrevidadedavida.jpg',_binary '\0'),(63,'Meditações','Motivacional','Marco Aurélio',2019,160,'Meditacoes.jpg',_binary '\0'),(64,'Jack, o Estripador em Nova York: 1895, um jovem detetive no encalço do serial killer mais famoso da ','Mistério, Europeia Literatura, Ficção, Ação e','Stefan Petrucha',2015,288,'JackoEstripador.jpg',_binary '\0'),(65,'O Mercador de Veneza','Literatura e Ficção','William Shakespeare',2022,140,'OMercadordeVeneza.jpg',_binary '\0'),(66,'Sonho de uma noite de verão','Clássicos de Ficção, Ficção Literária, Litera','William Shakespeare',2021,96,'Sonhodeumanoitedeverao.jpg',_binary '\0'),(67,'Romeu e Julieta','Drama, Literatura e Ficção','William Shakespeare',2016,248,'RomeueJulieta.jpg',_binary '\0'),(68,'Hamlet','Romance, Literatura e Ficção','William Shakespeare',2015,320,'Hamlet.jpg',_binary '\0'),(69,'Macbeth','Literatura e Ficção','William Shakespeare',2021,128,'Macbeth.jpg',_binary '\0'),(70,'A megera domada','Livros de Comédia Romântica, Ficção Literária','William Shakespeare',2021,128,'Amegeradomada.jpg',_binary '\0'),(71,'Júlio César','Europeia Literatura e Ficção','William Shakespeare',2018,184,'JulioCesar.jpg',_binary '\0'),(72,'Otelo','Europeia Literatura e Ficção','William Shakespeare',2017,328,'Otelo.jpg',_binary '\0'),(73,'Linguagem corporal: Guia prático para analisar e interpretar pessoas','Psicologia e Linguagem Corporal','Vitor Santos',2022,296,'Linguagemcorporal.jpg',_binary '\0');
/*!40000 ALTER TABLE `livros` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-12-13 22:00:18
