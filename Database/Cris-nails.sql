-- ============================================================
-- SCRIPT DE CRIAÇÃO E CONFIGURAÇÃO DO BANCO DE DADOS
-- Projeto: Cris Nails - Vitrine Digital e Portfólio
-- ============================================================

CREATE DATABASE IF NOT EXISTS cris_nails DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE cris_nails;


CREATE TABLE IF NOT EXISTS categorias (
  id INT AUTO_INCREMENT PRIMARY KEY,
  titulo VARCHAR(100) NOT NULL,
  subtitulo VARCHAR(255) DEFAULT NULL,
  slug VARCHAR(100) NOT NULL UNIQUE,
  imagem_capa VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS fotos (
  id INT AUTO_INCREMENT PRIMARY KEY,
  categoria_id INT NOT NULL,
  caminho_imagem VARCHAR(255) NOT NULL,
  legenda VARCHAR(255) DEFAULT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (categoria_id) REFERENCES categorias(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

DELETE FROM fotos;
DELETE FROM categorias;

INSERT INTO categorias (id, titulo, subtitulo, slug, imagem_capa) VALUES
(1, 'Alongamento', 'Elegância, estrutura e comprimento personalizado.', 'alongamento', 'assets/img/along1.jfif'),
(2, 'Esmaltação em Gel', 'Brilho espelhado e secagem imediata com alta durabilidade.', 'esmaltacao-em-gel', 'assets/img/gel1.jfif'),
(3, 'Blindagem', 'Escudo protetor contra descamação e quebras de unhas naturais.', 'blindagem', 'assets/img/blind1.jfif'),
(4, 'Francesinha', 'O clássico atemporal com acabamento delicado e moderno.', 'francesinha', 'assets/img/fran1.jfif'),
(5, 'Nail Art', 'Design exclusivo, decorações personalizadas e pedrarias.', 'nail-art', 'assets/img/art1.jfif'),
(6, 'Spa dos Pés', 'Tratamento completo de renovação, esfoliação e hidratação profunda.', 'spa-dos-pes', 'assets/img/pe1.jfif');

INSERT INTO fotos (categoria_id, caminho_imagem) VALUES
-- Categoria 1: Alongamento
(1, 'assets/img/along1.jfif'),
(1, 'assets/img/along2.jfif'),
(1, 'assets/img/along3.jfif'),
(1, 'assets/img/along4.jfif'),
(1, 'assets/img/along6.jfif'),
(1, 'assets/img/along7.jfif'),
(1, 'assets/img/along8.jfif'),
(1, 'assets/img/along9.jfif'),
(1, 'assets/img/along10.jfif'),
(1, 'assets/img/along11.jfif'),
(1, 'assets/img/along12.jfif'),

-- Categoria 2: Esmaltação em Gel
(2, 'assets/img/gel1.jfif'),
(2, 'assets/img/gel2.jfif'),
(2, 'assets/img/gel3.jfif'),
(2, 'assets/img/gel4.jfif'),
(2, 'assets/img/gel5.jfif'),
(2, 'assets/img/gel6.jfif'),
(2, 'assets/img/gel7.jfif'),
(2, 'assets/img/gel8.jfif'),
(2, 'assets/img/gel9.jfif'),
(2, 'assets/img/gel10.jfif'),
(2, 'assets/img/gel11.jfif'),
(2, 'assets/img/gel12.jfif'),
(2, 'assets/img/gel13.jfif'),

-- Categoria 3: Blindagem
(3, 'assets/img/blind1.jfif'),
(3, 'assets/img/blind2.jfif'),
(3, 'assets/img/blind3.jfif'),
(3, 'assets/img/blind4.jfif'),
(3, 'assets/img/blind5.jfif'),
(3, 'assets/img/blind6.jfif'),
(3, 'assets/img/blind7.jfif'),
(3, 'assets/img/blind8.jfif'),
(3, 'assets/img/blind9.jfif'),

-- Categoria 4: Francesinha
(4, 'assets/img/fran1.jfif'),
(4, 'assets/img/fran2.jfif'),
(4, 'assets/img/fran3.jfif'),
(4, 'assets/img/fran4.jfif'),
(4, 'assets/img/fran5.jfif'),
(4, 'assets/img/fran6.jfif'),
(4, 'assets/img/fran7.jfif'),
(4, 'assets/img/fran8.jfif'),
(4, 'assets/img/fran9.jfif'),
(4, 'assets/img/fran10.jfif'),
(4, 'assets/img/fran11.jfif'),
(4, 'assets/img/fran12.jfif'),
(4, 'assets/img/fran13.jfif'),

-- Categoria 5: Nail Art
(5, 'assets/img/art1.jfif'),
(5, 'assets/img/art2.jfif'),
(5, 'assets/img/art3.jfif'),
(5, 'assets/img/art4.jfif'),
(5, 'assets/img/art5.jfif'),
(5, 'assets/img/art6.jfif'),
(5, 'assets/img/art7.jfif'),
(5, 'assets/img/art8.jfif'),
(5, 'assets/img/art9.jfif'),
(5, 'assets/img/art10.jfif'),
(5, 'assets/img/art11.jfif'),
(5, 'assets/img/art12.jfif'),
(5, 'assets/img/art13.jfif'),

-- Categoria 6: Spa dos Pés
(6, 'assets/img/pe1.jfif'),
(6, 'assets/img/pe2.jfif'),
(6, 'assets/img/pe3.jfif'),
(6, 'assets/img/pe4.jfif'),
(6, 'assets/img/pe5.jfif'),
(6, 'assets/img/pe6.jfif'),
(6, 'assets/img/pe7.jfif'),
(6, 'assets/img/pe8.jfif'),
(6, 'assets/img/pe9.jfif'),
(6, 'assets/img/pe10.jfif'),
(6, 'assets/img/pe11.jfif'),
(6, 'assets/img/pe12.jfif'),
(6, 'assets/img/pe13.jfif');
