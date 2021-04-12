--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: _transaction; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._transaction (
    sno character varying(1) DEFAULT NULL::character varying,
    sender character varying(1) DEFAULT NULL::character varying,
    receiver character varying(1) DEFAULT NULL::character varying,
    balance character varying(1) DEFAULT NULL::character varying,
    datetime character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._transaction OWNER TO rebasedata;

--
-- Name: _users; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._users (
    id smallint,
    name character varying(7) DEFAULT NULL::character varying,
    email character varying(25) DEFAULT NULL::character varying,
    balance integer
);


ALTER TABLE public._users OWNER TO rebasedata;

--
-- Data for Name: _transaction; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._transaction (sno, sender, receiver, balance, datetime) FROM stdin;
\.


--
-- Data for Name: _users; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._users (id, name, email, balance) FROM stdin;
1	Tony	stark@starkindustries.com	50000
2	Steven	rogers@shield.com	30000
3	Bruce	banner@smash.com	40000
4	Natalie	portman@undercover.com	50000
5	Thor	odinson@asdgard.com	40000
6	Peter	parker@yourneighbour.com	30000
7	Nick	fury@shield.com	50000
8	Clint	barton@arrow.com	40000
9	TChalla	panther@wakanda.com	30000
10	Stephen	strange@multiverse.com	50000
\.


--
-- PostgreSQL database dump complete
--

