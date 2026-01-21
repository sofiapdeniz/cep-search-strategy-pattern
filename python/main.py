import sys
import os

sys.path.append(os.path.dirname(os.path.abspath(__file__)))

from Factories.CepFactory import CepFactory
from Services.CepSearcher import CepSearcher

def run_test():
    print("⟡ cep search test. py version ⟡")

    try:
        cep = "17404306"

        print("options: brasilapi, viacep")
        options = input("choose the api: ").strip()

        strategy = CepFactory.make(options)

        searcher = CepSearcher(strategy)

        result = searcher.execute_search(cep)

        print(f"\n[success by {result['fonte']}]")
        print(f"CEP: {result['cep']}")
        print(f"street: {result['rua']}")
        print(f"neighborhood: {result['bairro']}")
        print(f"city: {result['cidade']}")

    except Exception as e:
        print(f"\n[erro]: {e}")

if __name__ == "__main__":
    run_test()
